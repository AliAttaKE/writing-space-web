<?php

namespace App\Models\Management\ManageSetting\RoleAssign;

use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageSetting\commission\commission;
use App\Models\Management\ManageSetting\workflow\workflow;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RolesAssign extends Model
{
    use HasFactory;
    protected $fillable =['user_id','role_id','level_id','commission_id'];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function role()
    {
        return $this->belongsTo(workflow::class,'role_id');
    }
    public function level()
    {
        return $this->belongsTo(commission::class,'level_id');
    }
    public function package()
    {
        return $this->belongsTo(AddCommission::class,'commission_id');
    }
    public function roles()
    {
        return $this->belongsTo(workflow::class,'erp_role_id');
    }
    public function usersallow()
    {
        return $this->hasMany(RolesAssign::class,'erp_commission_id','commission_id');
    }
   
}


