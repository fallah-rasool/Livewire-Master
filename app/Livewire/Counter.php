<?php

namespace App\Livewire;

use Illuminate\Http\Response;
use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
 
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
    public function render()
    {
        return view('livewire.counter')
        ->layout('components.layouts.with-navigation')
        ->response(function(Response $response){
            $response->header('X-Rasool-Secret', 'cod ...');
        }) ;
    }
}
