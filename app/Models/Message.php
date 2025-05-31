<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
protected $table='message';
    protected $fillable=[
       'order_id','sender_id','receive_id','message','media','status','send_by','type'
    ];
}
