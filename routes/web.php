<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Post;
use App\Livewire\Post\PostCreat;
use App\Livewire\PostWelcome;
use App\Livewire\Todo\Index;
use PhpParser\Node\Expr\PostDec;

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter',Counter::class)->name('counter.page');

Route::get('index',Index::class)->name('index.page');

Route::get('post/creat',PostCreat::class)->name('post.crate');


Route::get('/welcom/{email}',PostWelcome::class)->name('Page.Welcom');
