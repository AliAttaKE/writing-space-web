<?php

namespace App\Models\Management\subscription;;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscriptionpivot extends Model
{
    use HasFactory;
    protected $fillable = [

        'id','subscription_id','pages_no','price_pp','actual_price','compare_price','product_type',
        'duration','duration_type','start_date','stock','min_purchase','max_purchase',

    ];
}
