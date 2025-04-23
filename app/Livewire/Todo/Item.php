<?php

namespace App\Livewire\Todo;

use Livewire\Component;

class Item extends Component
{
    public string $task='';
    public bool $isDone= false;
    
    public function togggle()
    {
        $this->isDone = !$this->isDone;
    }


    public function render()
    {
        return view('livewire.todo.item');
    }
}
