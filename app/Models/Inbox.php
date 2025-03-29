<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;
    protected $table='inbox';
    protected $fillable=[
       'order_id','sender_id','receive_id','message','media'
    ];
}

