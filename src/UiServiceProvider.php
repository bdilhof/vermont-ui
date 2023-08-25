<?php

namespace Vrmnt\Ui;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Vrmnt\Ui\App\View\Components\Test;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'ui');
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'ui');

        Blade::componentNamespace('Vrmnt\\Ui\\View\\Components', 'ui');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
