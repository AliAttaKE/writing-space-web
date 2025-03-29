<?php

namespace App\Models\Management\ManageOrders\CreateOrder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderstatuspivot extends Model
{
    use HasFactory;
    protected $fillable =['erp_user_id','order_id','reason'];

}
