<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Form;
use App\Livewire\Todo\Index;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',Index::class);
