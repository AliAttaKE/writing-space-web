<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLogs extends Model
{
    use HasFactory;

    protected $table = 'orderlogs';


    protected $fillable = [
        'user_id',
        'invoice_id',
        'order_id',
        'status',
        'order_type',
        'pages_addon_type',
        'pages_addon',
        'pages_purchase',
    ];

    // Relationship with Hotel model


   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
