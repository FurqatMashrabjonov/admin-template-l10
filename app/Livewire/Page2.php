<?php

namespace App\Livewire;

use Livewire\Component;

class Page2 extends Component
{
    public function toPage1(){
        return $this->redirect('/route1', navigate: true);
    }

    public function render()
    {
        return view('livewire.page2');
    }
}
