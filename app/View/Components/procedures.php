<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class procedures extends Component
{
    /**
     * The list of procedures.
     *
     * @var \Illuminate\Support\Collection
     */
    public $procedures;

    /**
     * Create a new component instance.
     *
     * @param \Illuminate\Support\Collection $procedures
     * @return void
     */
    public function __construct($procedures)
    {
        $this->procedures = $procedures;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.procedures');
    }
}
