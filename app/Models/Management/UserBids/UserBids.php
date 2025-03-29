<?php

namespace App\Models\Management\UserBids;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageSetting\Teams\Teams;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;

use App\Models\User;


class UserBids extends Model
{
    use HasFactory;
    protected $fillable = [
        'erp_user_id',
        'erp_order_id',
        'erp_status',
        'erp_team_id',
        'erp_description',
        'erp_datetime',
        'erp_time',
        'erp_type',
        'commission_id',
        'deadlineext',
        'exttype',
        'deadlinestatus',
        'reason',
        'erp_previous',
    ];

    public function UserName()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }
    public function UserComission()
    {
        return $this->belongsTo(AddCommission::class,'commission_id');
    }

    public function bids()
    {
        return $this->belongsTo(AddCommission::class,'commission_id');
    }

    public function bidstime()
    {
        return $this->hasMany(UserBids::class,'commission_id','order_id');
    }

    public function order(){
            return $this->belongsTo(createOrder::class,'erp_order_id');
        }














}
