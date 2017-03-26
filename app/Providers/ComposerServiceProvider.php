<?php

namespace App\Providers;



use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Compose the sidebar view with the latest variables
        View::composer(
            'partials.sidebar', 'App\Http\ViewComposers\Sidebar'
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
