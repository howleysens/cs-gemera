<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyStatistic extends Model
{
    use HasFactory;

    protected $connection = 'game_server';

    protected $table = 'fracsys';
}
