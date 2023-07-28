<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 0;

    public function render()
    {
        return view('livewire.counter');
    }

    public function incrementCount(){

        $this->counter++;
    }

    public function decrementCount() {

        if($this->counter > 0) {

            $this->counter--;
            
        }
    }
}
