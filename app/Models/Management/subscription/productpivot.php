<?php

namespace App\Models\Management\subscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productpivot extends Model
{
    use HasFactory;
    protected $fillable = [

        'id','product_id','pages_no','price_pp','actual_price','compare_price','product_type',
        'duration','duration_type','start_date','stock','min_purchase','max_purchase',

    ];
}
