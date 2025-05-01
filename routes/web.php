<?php

use App\Livewire\CalendarComponent;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CounterAlpine;
use App\Livewire\Dashboard;
use App\Livewire\EditPost;
use App\Livewire\Post\PostCreat;
use App\Livewire\PostLivewire;
use App\Livewire\PostWelcome;
use App\Livewire\Profile;
use App\Livewire\SecurityConcerns;
use App\Livewire\ShowCustomer;
use App\Livewire\Todo\Index;
use App\Models\User;
use App\Models\Post;
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
Route::get('/CounterAlpine',CounterAlpine ::class)->name('Page.CounterAlpine');
Route::get('/SecurityConcerns',SecurityConcerns ::class)->name('Page.SecurityConcerns');


Route::get('/post', PostLivewire::class)->name('all.post');
Route::get('/edit-post/{post}', EditPost::class)->name('edit.post');

Route::get('/creat-post',static function(){
   $user =  Post::create(
       [
            'title'=>"عنوان پیش فرض",
            'content'=>"محتوای پیش فرض",
         ]
       );
   return   redirect()->back();
      
})->name('creat.post');