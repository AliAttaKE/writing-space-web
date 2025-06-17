<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;
use App\Models\Invoice;
use App\Models\User;
use App\Models\User_Subscription;


class OrderLogs extends Model
{
    use HasFactory;

    protected $table = 'orderlogs';


    protected $fillable = [
        'user_id',
        'invoice_id',
        'order_id',
        'status','deadline',
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
    return $this->belongsTo(Orders::class, 'order_id');
}
}
