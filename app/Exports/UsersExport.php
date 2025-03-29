<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    protected $value;

    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {   
        if ($this->value != 'all_customers') {
            return User::select('account_id', 'name', 'email', 'tier', 'address_1', 'city')->where('tier', $this->value)->get();
        } else {
            return User::select('account_id', 'name', 'email', 'tier', 'address_1', 'city')->get();
        }
    }
}


