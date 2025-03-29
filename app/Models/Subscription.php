<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $table='subscription';
    protected $fillable=[
        'subscription_name',
        'service_type',
        'cost_per_page',
        'set_time',
        'min_page',
        'max_page',
        'rollover_limit',
        'total_subscription',
        'restrictions',
        'inform_customer_expiry_date',
        'inform_customer_email',
        'more_restrictions',
        'select_days',
        'daily',
        'best_offer',
    ];
}
