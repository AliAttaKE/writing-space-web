<?php

namespace App\Models\Management\ManageSetting\Teams;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\User;





use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{

     use HasFactory;
        protected $table = 'teams';

        protected $fillable = [

          'id','erp_team_name','erp_status','erp_package','dependent_package',

        ];



     public function package()
    {
        return $this->belongsTo(AddCommission::class,'commission_id');
    }

     public function user()
         {
             return $this->belongsTo(User::class,'user_id');
         }

}
