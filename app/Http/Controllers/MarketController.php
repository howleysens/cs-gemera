<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use xPaw\SourceQuery\SourceQuery;

class MarketController extends Controller
{
    public function index()
    {
        //        $connection = new SourceQuery();
        //        $connection->Connect(env('GAMESERVER_HOST'), env('GAMESERVER_PORT'), 10);
        //        $connection->Disconnect();
        return view('pages.market');
    }

    public function store(Request $request)
    {
        if ($request->privilegy_link === "link_nickname") {
            var_dump($request->validate([
                'nickname' => ['required', 'min:2'],
                'password' => ['required', 'min:3']
            ]));
        } else {
            var_dump($request->validate([
                'steamid' => ['required', 'min:8'],
                'password' => ['required', 'min:3'],
            ]));
        }
    }
}
