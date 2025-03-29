<?php

namespace App\Models\Management\TeamOrder;

use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\Teams\Teams;
use App\Models\User;
use App\Models\Worker\order_worker\Messages;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Management\ManageSetting\RoleAssign\RolesAssign;
class TeamOrder extends Model
{
    use HasFactory;


    protected $fillable = [
        'erp_team_id',
        'erp_commission_id',
        'erp_order_id',
        'erp_user_id',
        'available_status',
        'pick_status',
        'complete_status',
        'bid_date',
        'order_status',
        'reason',
    ];
    public function usersallow()
    {
        return $this->hasMany(RolesAssign::class,'commission_id','erp_commission_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'erp_user_id');
    }

    public function admin()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }


    public function commissionwork()
    {
        return $this->belongsTo(AddCommission::class,'erp_commission_id');
    }
    public function teams()
    {
        return $this->belongsTo(Teams::class,'erp_team_id');
    }

    public function order(){
        return $this->belongsTo(CreateOrder::class,'erp_order_id');
    }
    public function message(){
        return $this->belongsTo(Messages::class,'erp_order_id','order_id');
    }

    public function submission(){
            return $this->belongsTo(Messages::class,'erp_order_id','order_id');
        }

//    













}
