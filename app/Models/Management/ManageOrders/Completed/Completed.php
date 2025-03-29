<?php

namespace App\Models\Management\Completed;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Completed extends Model
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
