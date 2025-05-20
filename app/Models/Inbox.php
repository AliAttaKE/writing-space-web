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

    public function order()
{
    return $this->belongsTo(\App\Models\Orders::class, 'order_id', 'order_id');
}

    public function messages()
    {
        // Message::class, FK on messages.order_id, PK on inbox.order_id
        return $this->hasMany(\App\Models\Message::class, 'order_id', 'order_id');
    }
}

