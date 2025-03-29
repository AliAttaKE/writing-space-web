<?php

namespace App\Models\Management\subscription;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription extends Model
{
    use HasFactory;

    protected $fillable = [

        'id','name','slug','description','actual_price','compare_price','status','product_type',
          
    ];
}
