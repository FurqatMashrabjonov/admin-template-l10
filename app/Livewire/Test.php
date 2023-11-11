<?php

namespace App\Livewire;

use Livewire\Component;

class Test extends Component
{

public $name = 1;

    public function increment(){
        $this->name += 1;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
