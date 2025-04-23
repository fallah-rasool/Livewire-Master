<?php

namespace App\Livewire\Post;

use Livewire\Component;

class PostCreat extends Component
{
  
    public function render()
    {
        return view('livewire.post.post-creat')
        ->title('Create Post')
        ->layout('components.layouts.with-navigation')
        ; 
        
    }
}
