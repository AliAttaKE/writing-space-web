<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class User_Subscription extends Model
{
    use HasFactory;
    protected $table='user_subscription';
    protected $fillable=[
       'subscription_id','user_id','total_pages','remaining_pages','rollover_pages','total_cost','cost_per_page_final','number_of_page','due_date','status','remaining_rollover_pages','isEmail'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
