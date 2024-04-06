<?php

namespace App\Http\Controllers;

use App\Models\GameStatistic;
use App\Models\User;
use App\Models\UsersStatistic;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function __invoke()
    {
        $bestChief = Cache::remember('bestChief', Config::get('settings.statistic_parsing_time'), function () {
            return GameStatistic::query()->orderByDesc('was_chief')->limit(1)->get();
        });
        $richestPlayers = Cache::remember('richestPlayers', Config::get('settings.statistic_parsing_time'), function () {
            return UsersStatistic::query()->orderByDesc('money')->limit(3)->get();
        });
        $lastUser = User::query()->orderByDesc('created_at')->limit(1)->get();
        return view('home', compact('bestChief', 'richestPlayers', 'lastUser'));
    }
}
