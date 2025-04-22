<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPakage extends Model
{
    use HasFactory;

    protected $table='pricing_pakages';
    protected $fillable=[
       'text','cost','min','max','cost_per_page','page_limit','title','duration_type','page_text',
    ];
}

