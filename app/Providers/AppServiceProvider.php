<?php

namespace App\Providers;

use App\Observers\UserObserver;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        User::creating(function ($user){
            \Log::info("User {$user->email} will be registered");
        });

        User::creating(function ($user){
            \Log::info("User {$user->email} will be registered - 2");
        });

        User::created(function ($user) {
            //\Mail::to($user)->send(new UserRegistered($user));
            \Log::info("User {$user->email} was registered");
        });

        User::updating(function ($user){
            \Log::info("User {$user->email} will be updated");
        });

        User::updated(function ($user){
            \Log::info("User {$user->email} was updated");
        });

        User::saving(function ($user){
            \Log::info("User {$user->email} will be saved");
        });

        User::saved(function ($user){
            \Log::info("User {$user->email} was salvo");
        });
         *
         * */

        User::observe(UserObserver::class);

        //Evento - Ação e disparo
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
