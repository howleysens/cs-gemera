<?php

namespace App\Http\Controllers;

use App\Enums\PaymentStatusEnum;
use App\Models\Transaction;
use App\Models\User;
use App\Providers\PaymentServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use YooKassa\Model\Notification\NotificationEventType;
use YooKassa\Model\Notification\NotificationSucceeded;
use YooKassa\Model\Notification\NotificationWaitingForCapture;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payments.index');
    }

    public function create(Request $request, PaymentServiceProvider $service)
    {
        $amount = (float)$request->input('amount');
        $description = "Покупка привилегии";
        $transaction = Transaction::create([
            'amount' => $amount,
            'description' => $description,
        ]);
        if ($transaction) {
            $link = $service->createPayment($amount, $description, [
                'transaction_id' => $transaction->id
            ]);
            return redirect()->away($link);
        }
    }

    public function callback(Request $request, PaymentServiceProvider $service)
    {
        $source = file_get_contents('php://input');
        $requestBody = json_decode($source, true);
        $notification = (isset($requestBody['event']) && $requestBody['event'] === NotificationEventType::PAYMENT_SUCCEEDED)
            ? new NotificationSucceeded($requestBody)
            : new NotificationWaitingForCapture($requestBody);
        $payment = $notification->getObject();

        if (isset($payment->status) && $payment->status === 'waiting_for_capture') {
            $service->getClient()->capturePayment([
                'amount' => $payment->amount,
            ], $payment->id, uniqid('', true));
        }

        if (isset($payment->status) && $payment->status === 'succeeded') {
            if ((bool)$payment->paid === true) {
                $metadata = (object)$payment->metadata;
                if (isset($metadata->transaction_id)) {
                    $transactionId = (int)$metadata->transaction_id;
                    $transaction = Transaction::find($transactionId);
                    $transaction->status = PaymentStatusEnum::CONFIRMED;
                    $transaction->save();
                    $user = Auth::user();
                    if ($user->getBalance() > 0) {
                        User::query()->find(Auth::id())->update([
                            'balance' => (float)$user->getBalance() + (float)$payment->amount->value
                        ]);
//                        (float)$user->balance + (float)$payment->amount->value;
                    } else {
                        User::query()->find(Auth::id())->update([
                            'balance' => (float)$payment->amount->value
                        ]);
                    }
                }
            }
        }
    }
}
