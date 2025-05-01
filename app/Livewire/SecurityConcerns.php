<?php

namespace App\Livewire;

use Livewire\Component;

use Livewire\Attributes\Locked;

class SecurityConcerns extends Component
{
    #[Locked] 
    public $status = 'active';  
    public function mount()  
    {  

       // اینجا می‌توان status را مقداردهی کرد  

        $this->status = 'pending';  
    }  
    public function updateStatus()  
    {  
        // اینجا نمی‌توان status را تغییر داد  
        // این خط خطا خواهد داد چون property قفل شده است  
    //    $this->status = 'inactive';  
        // try {
        //     $this->status = 'inactive';
        // } catch (\Throwable $e) {
        //     dd('Locked کار می‌کنه! پیغام: ' . $e->getMessage());
        // }
        $this->status = 'inactive';
        //dd($this->status); // ببین چی برمی‌گردونه
    }  


    public function render()
    {
        return view('livewire.security-concerns')
        ->layout('components.layouts.with-navigation');
    }
}
