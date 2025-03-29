<?php

namespace App\Models\Management\ManageSetting\AddCommission;
use    App\Models\Management\ManageSetting\workflow\workflow;
use    App\Models\Management\ManageSetting\commission\commission;
use App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCommission extends Model
{
    use HasFactory;
    protected $table = 'add_commission';
    protected $with=['RoleName'];

    protected $fillable = [
        'erp_role_id','erp_level_id','erp_daily_bids','erp_daily_claims','erp_eight_hrs','erp_tf_hrs',
        'erp_fe_hrs','erp_three_days','erp_five_days','erp_seven_days','package_name','erp_fourteen_days','erp_fourteen_plus_days'
    ];



    public function RoleName()
        {
            return $this->belongsTo(workflow::class,'erp_role_id');
        }

        public function RoleLevel()
                {
                    return $this->belongsTo(commission::class,'erp_level_id');
                }
    public function rol()
    {
        return $this->belongsTo(workflow::class);
    }

}
