<?php

namespace App\DataTypes;
use Livewire\Wireable;


class Customer implements Wireable
{
    public string $first_name;  
    public string $last_name;  
    public string $cod;  

    public function __construct(string $first_name, string $last_name, string $cod)  
    {  
        $this->first_name = $first_name;  
        $this->last_name = $last_name;  
        $this->cod = $cod;  
    }  

    public function toLivewire()
    {  
        return [  
            'first_name' => $this->first_name,  
            'last_name' => $this->last_name,  
            'cod' => $this->cod,  
        ];  
    }
    public static function fromLivewire($value) 
    {  
        return new self(  
            $value['first_name'],  
            $value['last_name'],  
            $value['cod']  
        );  
    }
}