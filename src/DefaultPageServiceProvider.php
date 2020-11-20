<?php

namespace Cms\Defaults\Providers;

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
            __DIR__ . '/../../resources/assets' => public_path('vendor/cms-defaults'),
        ], 'cms-assets');
    }

    protected function loadViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'cms-defaults');

        $this->publishes([
            __DIR__ . '/../../resources/views' => resource_path('views/vendor/cms-defaults'),
        ]);
    }
}
