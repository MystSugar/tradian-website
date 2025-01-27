<?php

namespace App\Livewire;

use App\Models\Procedure;
use Livewire\Component;


class Procedures extends Component
{
    public $procedures;

    public function filter($input)
    {
        $this ->procedures=Procedure::latest()->take(3)->where('type', $input )->get();
    }

    public function mount()
    {
        $this ->procedures=Procedure::latest()->take(3)->get();
    }

    public function render()
    {

        return view('livewire.procedures', ['procedures'=>$this ->procedures]);
    }
    
}
