<?php

namespace UpInside\LaravelMakeTrait;

use UpInside\LaravelMakeTrait\Commands\TraitMakeCommand;
use Illuminate\Support\ServiceProvider;

class MakeTraitServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                TraitMakeCommand::class,
            ]);
        }
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