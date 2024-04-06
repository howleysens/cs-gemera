<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
