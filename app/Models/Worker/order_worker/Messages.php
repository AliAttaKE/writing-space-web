<?php

namespace App\Models\Worker\order_worker;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Messages extends Model
{
    use HasFactory;

    protected $fillable = [
        'reciever_id',
        'sender_id',
        'order_id',
        'team_id',
        'commission_id',
        'subject',
        'status',
        'description',
        'message_for_receiver',
        'message_for_sender',
        'erp_file',

    ];


    public function users()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function reciever()
    {
        return $this->belongsTo(User::class, 'reciever_id');
    }
}
