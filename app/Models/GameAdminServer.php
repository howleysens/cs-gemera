<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameAdminServer extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $connection = 'csbans';

    protected $fillable = [
        'admin_id',
        'server_id',
        'custom_flags',
        'use_static_bantime',
    ];

    protected $table = 'amx_admins_servers';
}
