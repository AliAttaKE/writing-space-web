<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandAmbassador extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id',
        'sender_name',
        'receiver_name',
        'subject',
        'email',
        'message',
    ];
}
