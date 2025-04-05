<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingWeb extends Model
{
    use HasFactory;
    protected $table='pricing1';
    protected $fillable=[
       'text','cost','min','max','cost_per_page','page_limit','title','duration_type','page_text',
    ];
}
