<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAdmin extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $connection = 'csbans';

    protected $fillable = [
        'id',
        'username',
        'password',
        'access',
        'flags',
        'steamid',
        'nickname',
        'icq',
        'ashow',
        'created',
        'expired',
        'days',
    ];

    protected $table = 'amx_amxadmins';
}
