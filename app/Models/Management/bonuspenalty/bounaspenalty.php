<?php

namespace App\Models\Management\bonuspenalty;


use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bounaspenalty extends Model
{
    use HasFactory;

    protected $fillable = ['type','order_id','team_order_id','user_id','commission_id','reason','amount'];
    public function commission(){
        return $this->belongsTo(AddCommission::class ,'commission_id');
    }
    public function worker(){
        return $this->belongsTo(User::class ,'user_id');
    }
}
