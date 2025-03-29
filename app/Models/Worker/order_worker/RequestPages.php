<?php

namespace App\Models\Worker\order_worker;


use App\Models\Management\TeamOrder\TeamOrder;

use App\Models\Management\ManageOrders\CreateOrder\CreateOrder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class RequestPages extends Model
{
    use HasFactory;
    protected $table = 'requestpages';

     protected $fillable = [
                'pages_no',
                'DateTime',
                'description',
                'team_order_id',
                'status'

                 ];


}
