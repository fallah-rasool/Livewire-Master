<?php

namespace App\Livewire;

use Livewire\Component;
use App\DataTypes\Customer;  

class ShowCustomer extends Component
{
   
    public Customer $customer;  

    public function mount()  
    {  
        $this->customer = new Customer('John', 'Doe', '12345'); // مقداردهی اولیه  

    }  

    public function render()
    {
        return view('livewire.show-customer')
        ->layout('components.layouts.with-navigation');
    }
}
