<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginSession extends Model
{
    use HasFactory;
    protected $table = 'login_sessions';
    protected $guarded = [];

    protected $casts = [
        'time' => 'datetime', 
        'logout_time' => 'datetime', 
    ];

    // location
    // device
    // ip_address
    // time
    
}
