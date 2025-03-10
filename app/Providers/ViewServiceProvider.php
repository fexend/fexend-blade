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
        $this->registerViewComposers();
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

    /**
     * Register the view composers.
     */
    protected function registerViewComposers(): void
    {
        \Illuminate\Support\Facades\View::composer('components.layouts.sidebar', 'App\View\Composers\SidebarComposer');
    }
}
