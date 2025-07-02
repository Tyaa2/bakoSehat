<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
    \App\Models\DataWarga::class => \App\Policies\DataWargaPolicy::class,
];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Contoh Gate untuk memeriksa role
        Gate::define('IsPuskesmas', function (User $user) {
            return $user->role === 'puskesmas';
        });

        Gate::define('IsKelurahan', function (User $user) {
            return $user->role === 'kelurahan';
        });

        Gate::define('IsDukcapil', function (User $user) {
            return $user->role === 'dukcapil';
        });

        Gate::define('IsDinkes', function (User $user) {
            return $user->role === 'dinkes';
        });
    }
}
