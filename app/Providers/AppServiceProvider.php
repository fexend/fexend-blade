<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        AliasLoader::getInstance([
            'Number' => \App\Supports\Number::class,
            'Str' => \App\Supports\Str::class,
            'Carbon' => \App\Supports\Carbon::class,
            'Crypt' => \App\Supports\Crypt::class,
            'AvatarSupport' => \App\Supports\AvatarSupport::class,
        ]);

        Model::shouldBeStrict();

        Gate::define('viewPulse', function (User $user) {
            return in_array($user->email, explode(',', env('PULSE_USERS', '')));
        });
    }
}
