<?php

namespace App\Models\Management\ManageOrders\CreateOrder;

use App\Models\Management\OrderSettings\DocumentType\DocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;



class instructionPivot extends Model
{
    use HasFactory;
        protected $fillable =['erp_users_id','erp_order_id','erp_message'];



    public function instruction()
    {
        return $this->belongsTo(CreateOrder::class, 'erp_order_id');
    }

}
