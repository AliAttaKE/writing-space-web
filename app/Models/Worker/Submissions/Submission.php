<?php

namespace App\Models\Worker\Submissions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Management\ManageSetting\AddCommission\AddCommission;
use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;



class Submission extends Model
{

   use HasFactory;
       protected $table = 'submissions';

    protected $fillable=[
        'order_id',
        'team_order_id',
        'user_id',
        'commission_id',
        'title',
        'sec_title',
        'keywords',
        'description',
        'cat_1',
        'cat_2',
        'main_file',
        'sources',
    ];


     public function commission()
             {
                 return $this->belongsTo(AddCommission::class,'commission_id');
             }

     public function user()
                  {
                      return $this->belongsTo(User::class,'user_id');
                  }
       public function order()

                   {

                       return $this->belongsTo(CreateOrder::class,'order_id');

                   }



}
