<?php

namespace App\Models\Management\products;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $fillable = [

        'id',
        'name',
        'slug',
        'image',
        'status',
    ];
}
