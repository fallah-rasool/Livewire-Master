<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Livewire::setUpdateRoute(function ($handle) {
        //     return Route::post('ajax/dispatcher', $handle);
        // });

        Relation::morphMap([
            'post' => \App\Models\Post::class,
        ]);

    }
}
