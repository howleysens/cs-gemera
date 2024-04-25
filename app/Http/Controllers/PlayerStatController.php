<?php

namespace App\Http\Controllers;

use App\Models\UsersStatistic;

class PlayerStatController extends Controller
{
    public function index()
    {
        $playersList = UsersStatistic::query()->orderBy('id')->simplePaginate(50);
        return view('pages.players', compact('playersList'));
    }
}
