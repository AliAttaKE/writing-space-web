<?php

namespace App\Exports;

use App\Models\CustomerOrder;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;

class CustomerOrdersExport implements FromCollection, WithHeadings
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function collection()
    {
        $query = CustomerOrder::query();

        // 🔍 Search filter
        if ($this->request->search) {
            $query->where(function($q) {
                $q->where('customer_name', 'like', "%{$this->request->search}%")
                  ->orWhere('customer_email', 'like', "%{$this->request->search}%");
            });
        }

        // 📅 Date filter
        if ($this->request->start_date) {
            $query->whereDate('created_at', '>=', $this->request->start_date);
        }

        if ($this->request->end_date) {
            $query->whereDate('created_at', '<=', $this->request->end_date);
        }

        // ↕ Sorting
        if ($this->request->sort) {
            $query->orderBy($this->request->sort, $this->request->direction ?? 'asc');
        }

        return $query->get([
            'customer_name',
            'customer_email',
            'orders_left',
            'no_of_orders',
            'created_at'
        ]);
    }

    public function headings(): array
    {
        return [
            'Customer Name',
            'Customer Email',
            'Orders Used',
            'Orders Left',
            'Created At'
        ];
    }
}
