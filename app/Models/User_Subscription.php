<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Subscription extends Model
{
    use HasFactory;
    protected $table='user_subscription';
    protected $fillable=[
       'subscription_id','user_id','total_pages','remaining_pages','rollover_pages','due_date','status','remaining_rollover_pages','isEmail'
    ];
}
