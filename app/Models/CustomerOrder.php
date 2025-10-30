<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{

    
    use HasFactory;

    
    protected $fillable = [
        'customer_name',
        'customer_email',
        'user_id',
        'no_of_orders',
        'orders_left'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
