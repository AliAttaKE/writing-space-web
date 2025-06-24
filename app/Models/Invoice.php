<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Orders;
use App\Models\Subscription;


class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['Name', 'email', 'item_name','page' ,'price_per_page','total','to_name','to_email','order_id','invoice_id','invoice_type'];

    public function order()
    {
    return $this->belongsTo(Orders::class, 'order_id','order_id');

    }



     public function subscriptionName(): ?string
    {

        return optional(
            $this->order
                ->user
                ->userSubscription
                ->subscription
        )->subscription_name;
    }
}
