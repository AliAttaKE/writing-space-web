<?php

namespace App\Exports;

use App\Models\Orders;
use App\Models\Invoice;
use Illuminate\Support\Collection;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExportInvoice implements FromCollection, WithHeadings
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function collection()
    {
        if ($this->value) {
            return DB::table('invoices')
                // ->join('invoices', 'orders.order_id', '=', 'invoices.order_id')
                ->where('invoices.order_id', '=', $this->value)
                ->get();
        }
    }

    public function headings(): array
    {
        return [
            'ID',
            'Invoice Id',
            'Name',
            'Email',
            'item name',
            'page',
            'price per page',
            'total',
            'to name',
            'to email',
            'order id',
            'description',
            'invoice type',
            'created_at',
       
            
        ];
    }
}
