<?php

namespace App\Models\Worker\order_worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class requestPivot extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'erp_status',
        'name',
        'description',

    ];
}
