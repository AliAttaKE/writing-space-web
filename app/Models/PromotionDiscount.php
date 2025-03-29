<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromotionDiscount extends Model
{
    use HasFactory;
    protected $table="promotion_discounts";
    protected $fillable=[
        'promotion_id',
        'start_date',
        'end_date',
        'decrease_date',
    ];
}
