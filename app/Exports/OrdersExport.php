<?php

namespace App\Exports;

use Log;
use App\Models\Orders;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;

class OrdersExport implements FromCollection
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function collection()
    {
        
        if($this->value === 'Pending')
        {
            return Orders::where('order_status', '=', 'Pending')->get();
        }
        elseif($this->value === 'Inprogress'){
            return Orders::where('order_status', '=', 'Inprogress')->get();
        }
        elseif($this->value === 'Revision'){
            return Orders::where('order_status', '=', 'Revision')->get();
        }
        elseif($this->value === 'Completed'){
            return Orders::where('order_status', '=', 'Completed')->get();
        }
        elseif($this->value === 'Delivered'){
            return Orders::where('order_status', '=', 'Delivered')->get();
        }
        elseif($this->value === 'Refund'){
            return Orders::where('order_status', '=', 'Refund')->get();
        }
        elseif($this->value === 'Canceled'){
            return Orders::where('order_status', '=', 'Canceled')->get();
        }


    }
    

}