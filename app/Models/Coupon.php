<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount',
        'start_date',
        'end_date',
        'discount_value',
        'total_user',
        'per_user_use',
        'min_pages',
        'Active'
    ];
    
}
