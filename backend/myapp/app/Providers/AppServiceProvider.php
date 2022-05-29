<?php

namespace App\Providers;

use Illuminate\Auth\Access\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Gate::define('admin',function(User $user){
        //     return $user->role == "admin";
        // });

    }
}
