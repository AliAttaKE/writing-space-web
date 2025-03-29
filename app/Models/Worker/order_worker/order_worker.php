<?php

namespace App\Models\Worker\order_worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_worker extends Model
{
    use HasFactory;
    protected $table = '';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'email',
        'image',
        'status',
    ];
}
