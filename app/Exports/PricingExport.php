<?php

namespace App\Exports;

use App\Models\Pricing;
use Maatwebsite\Excel\Concerns\FromCollection;

class PricingExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pricing::all();
    }
}
