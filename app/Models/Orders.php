<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table='orders';
    protected $fillable=[
        'subject',
        'description',
        'academic_level',
        'type_of_paper',
        'paper_format',
        'language_spelling',
        'number_of_pages',
        'spacing',
        'powerpoint_slide',
        'no_of_extra_sources',
        'deadline',
        'statistical_analysis',
       'order_type',
        'order_show',
        'order_status',
        'user_id',
        'additional_cost',
        'cost',
        'total_cost',
        'order_id',
        'topic',
        'additional_info',
        'submitting',
        'coupon',
        'discount',
        'payment_status',
        'cost_per_page',
        'email',
        'backup_email','plagiarism','ai_detection','outline','summary'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subscription()
    {
        // if your FK is named something else, pass it here:
        // return $this->belongsTo(Subscription::class, 'your_subscription_fk');
        return $this->belongsTo(Subscription::class);
    }

    public function invoice()
    {
        // invoices.order_id → orders.id
        return $this->hasOne(Invoice::class, 'order_id', 'id');
    }
}
