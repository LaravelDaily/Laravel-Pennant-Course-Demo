<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Lottery;
use Illuminate\Support\ServiceProvider;
use Laravel\Pennant\Feature;

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
        Feature::define('tasks-management', function (User $user) {
            return (bool)$user->is_premium;

            // return app()->environment('local');

            // return $user->email == 'admin@admin.com';

            // return Lottery::odds(1, 5);
        });

        // Feature::define('tasks-management', Lottery::odds(1, 5));
    }
}

