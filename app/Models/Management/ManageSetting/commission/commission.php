<?php

namespace App\Models\Management\ManageSetting\commission;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commission extends Model
{
    use HasFactory;
    protected $table = 'commission';

    protected $fillable = [
        'erp_user_id','erp_commission_level','erp_commission_status'
    ];
}
