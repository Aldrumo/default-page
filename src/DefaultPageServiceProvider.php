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
        $this->loadViews();
        $this->loadAssets();
    }

    protected function loadAssets()
    {
        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('aldrumo/default-page'),
        ], 'aldrumo-public');
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'AldrumoDefaults');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/aldrumo-defaults'),
        ]);
    }
}
