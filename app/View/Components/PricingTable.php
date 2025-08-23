<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Pricing;

class PricingTable extends Component
{
    public $pricing;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->pricing = Pricing::orderBy('id', 'desc')->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pricing-table');
    }
}