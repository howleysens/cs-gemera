<?php

namespace App\Http\Controllers;

use App\Models\GameAdmin;
use App\Models\GameAdminServer;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use function Laravel\Prompts\error;

class MarketController extends Controller
{
    public function index()
    {
        return view('pages.market');
    }

    public function store(Request $request)
    {
        $authUser = Auth::user();
        $start = Carbon::now()->timestamp;
        $end = Carbon::now()->addMonth()->timestamp;
        if ($request->privilegy_link === "link_nickname") {
            $request->validate([
                'nickname' => ['required', 'min:2'],
                'password' => ['required', 'min:3']
            ]);
        } else {
            $request->validate([
                'steamid' => ['required', 'min:8'],
                'password' => ['required', 'min:3'],
            ]);
        }
        if (Auth::user()->getBalance() >= $request->price && $request->privilegy_link === "link_nickname") {
            switch ($request->privilegy) {
                case "HOOK":
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 's')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "st",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
                case "GRAB":
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 'g')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "gt",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
                case "SVIP":
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 'c')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "ct",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
                case 'PREM':
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 'm')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "mt",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
                case 'ADM':
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 'd')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "cdgmst",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
                case 'HLPR':
                    if (GameAdmin::query()->where('nickname', '=', $request->nickname)->first()) {
                        if (strpos(GameAdmin::query()->where('nickname', '=', $request->nickname)->first()->access, 'n')) {
                            return redirect()->back()->with(['errorFlag' => 'У вас уже есть эта привилегия']);
                        }
                    } else {
                        $newAdmin = GameAdmin::create([
                            'username' => '',
                            'password' => md5($request->password),
                            'access' => "cdgmnst",
                            'flags' => "a",
                            'steamid' => $request->nickname,
                            'nickname' => $request->nickname,
                            'icq' => null,
                            'ashow' => 1,
                            'created' => $start,
                            'expired' => $end,
                            'days' => 30,
                        ]);
                        GameAdminServer::query()->create([
                            'admin_id' => $newAdmin->id,
                            'custom_flags' => "",
                            'server_id' => 1,
                            'use_static_bantime' => 'no',
                        ]);
                        $authUser->setBalance($authUser->getBalance() - $request->price);
                        $authUser->save();
                    }
                    break;
            }
        } else {
            return redirect()->back()->with(['errorFlag' => 'Пополните баланс']);
        }
        return view('payments.thanks');
    }
}
