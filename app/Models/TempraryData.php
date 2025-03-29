<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempraryData extends Model
{
    use HasFactory;
    protected $table = 'temprary_data';
    protected $fillable = [
        'email',
        'temprary_token',
        'auth_user_id',
    ];
}
