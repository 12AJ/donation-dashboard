<?php

namespace App\View\Components;

use Illuminate\View\Component;

class donationEntries extends Component
{
    public $num;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($num)
    {
        $this->num=$num;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.donation-entries');
    }
}
