<?php

namespace App\Models\Management\Accounts;

use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
protected $fillable=[
    'order_id',
    'team_order_id',
    'user_id',
    'commission_id',
    'title',
    'hours',
    'ext_source',
    'pages',
    'spacing',
    'commission_rate',
    'payment_status',
];
public function commission(){
    return $this->belongsTo(AddCommission::class ,'commission_id');
}
    public function worker(){
        return $this->belongsTo(User::class ,'user_id');
    }

}
