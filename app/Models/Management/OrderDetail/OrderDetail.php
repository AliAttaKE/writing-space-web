<?php

namespace App\Models\Management\OrderDetail;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = '';

    protected $fillable = [
        'erp_name',
        'erp_title',
        'erp_description',
    ];

    public function UserName()
    {
        return $this->belongsTo(User::class,'erp_user_id');
    }
//
//    public function bids()
//    {
//        return $this->belongsTo(Bids::class,'erp_user_id ');
//    }
}
