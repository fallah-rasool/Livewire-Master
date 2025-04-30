<?php

use App\Livewire\CalendarComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\Dashboard;
use App\Livewire\Post;
use App\Livewire\Post\PostCreat;
use App\Livewire\PostWelcome;
use App\Livewire\Profile;
use App\Livewire\ShowCustomer;
use App\Livewire\Todo\Index;
use App\Models\User;
use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\PostDec;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('counter',Counter::class)->name('counter.page');

Route::get('index',Index::class)->name('index.page');

Route::get('post/creat',PostCreat::class)->name('post.crate');


Route::get('/welcom/{email}',PostWelcome::class)->name('Page.Welcom');

Route::get('/creat-user',static function(){
    $time= time();
   $user =  User::create(
       [
            'name'=>"user-$time",
            'email'=>"user-$time",
            'email_verified_at'=>Carbon::now(),
            'password'=>'secret',
        ]
       );
       dd($user);
    });


Route::get('/user/{user}',Profile::class)->name('page.user-profile');
Route::get('/CalendarComponent',CalendarComponent::class)->name('page.calendar.component');


Route::get('/ShowCustomer',ShowCustomer ::class)->name('Page.Show-Customer');