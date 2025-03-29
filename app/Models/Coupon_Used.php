<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon_Used extends Model
{
    use HasFactory;
    protected $table='coupon_used';
    protected $fillable=[
        'coupon',
        'user_id'
    ];
}
