<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
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
        $this->registerBladeDirectives();
    }

    /**
     * Register the blade directives.
     */
    protected function registerBladeDirectives(): void
    {
        \App\View\Directives\DateDirective::load();
        \App\View\Directives\NumberDirective::load();
        \App\View\Directives\StrDirective::load();
    }
}
