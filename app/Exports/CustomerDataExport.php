<?php

namespace App\Exports;

use App\Models\CustomerData;
use Maatwebsite\Excel\Concerns\FromCollection;

class CustomerDataExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CustomerData::all();
    }
}
