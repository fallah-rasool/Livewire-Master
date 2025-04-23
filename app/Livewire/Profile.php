<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Profile extends Component
{
    public User $user;
    public function mount(User $user) :void
    {
       $this->user= $user;

    }
    protected function bag(): array
    {
        return ['users'=>User::all()];
    }

    public function render()
    {
        return view('livewire.profile', $this->bag())
        ->layout('components.layouts.with-navigation');

    }
}
