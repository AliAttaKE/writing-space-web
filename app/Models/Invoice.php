<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'email', 'item_name','page' ,'price_per_page','total','to_name','to_email','order_id','invoice_id','invoice_type'];
}
