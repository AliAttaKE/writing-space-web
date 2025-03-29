<?php

namespace App\Models\Worker\myprofile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myprofile extends Model
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
