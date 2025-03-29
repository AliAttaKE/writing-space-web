<?php

namespace App\Models\Management\Bids;
use App\Models\Management\ManageSetting\workflow\workflow;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bids extends Model
{
    use HasFactory;

    protected $fillable = [
        'erp_user_id',
        'erp_role_id',
        'erp_bids',
        'erp_claims',
    ];
    public function UserName()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }
    public function role(){
        return $this->belongsTo(workflow::class,'erp_role_id');
    }
}
