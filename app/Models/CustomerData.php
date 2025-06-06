<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerData extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_name',
        'account_id',
        'email',
        'payment_method',
        'status'
    ];
}
