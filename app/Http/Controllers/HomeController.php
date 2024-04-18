<?php

namespace App\Http\Controllers;

use App\Models\FamilyStatistic;
use App\Models\GameStatistic;
use App\Models\UsersStatistic;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function __invoke()
    {
        $bestChief = Cache::remember('best_chief', Config::get('settings.statistic_parsing_time'), function () {
            return GameStatistic::orderByDesc('was_chief')
                ->limit(1)
                ->get();
        });
        $richestPlayers = Cache::remember('richest_players', Config::get('settings.statistic_parsing_time'), function () {
            return UsersStatistic::orderByDesc('money')
                ->whereNotIn('steamid', ['STEAM_0:0:209752981', 'STEAM_0:1:754134700', 'STEAM_0:0:17116760'])
                ->limit(3)
                ->get();
        });
        $bestFamilies = Cache::remember('best_families_cache', Config::get('settings.statistic_parsing_time'), function () {
            return FamilyStatistic::orderByDesc('Exp')
                ->limit(3)
                ->get()
                ->unique('ClanName');
        });
        return view('home', compact('bestChief', 'richestPlayers', 'bestFamilies'));
    }
}
