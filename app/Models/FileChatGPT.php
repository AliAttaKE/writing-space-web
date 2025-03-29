<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FileChatGPT extends Model
{
    
     protected $fillable = [
        'file_name',
        'title',
        'order_id',
        'user_id',
        'file_path',
        'file_type',
        'Size',
        'status',
    ];
    
    use HasFactory;
}
