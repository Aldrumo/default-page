<?php

namespace Aldrumo\DefaultPage;

use Illuminate\Support\ServiceProvider;

class DefaultPageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->bootViews();
    }
    protected function bootViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'AldrumoDefaults');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/aldrumo-defaults'),
        ]);
    }
}
