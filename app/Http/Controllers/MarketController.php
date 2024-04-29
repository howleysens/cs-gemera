<?php

namespace App\Http\Controllers;

use App\Models\GameAdmin;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use MongoDB\BSON\Timestamp;
use xPaw\SourceQuery\SourceQuery;

class MarketController extends Controller
{
    public function index()
    {
        return view('pages.market');
    }

    public function store(Request $request)
    {
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
            if ($request->privilegy === "HOOK") {
                GameAdmin::query()->firstOrCreate([
                    'nickname' => $request->nickname,
                ], [
                    'password' => md5($request->password),
                    'username' => $request->nickname,
                    'access' => "st",
                    'flags' => "a",
                    'ashow' => 1,
                    'created' => $start,
                    'expired' => $end,
                    'days' => 31,
                ]);
            } else {
                var_dump('other');
            }
        }
    }
}
