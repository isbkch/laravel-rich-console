<?php

namespace Isbkch\Commands;

/*
 *
 * @author iLyas Bakouch <isbkch@gmail.com>
 */

use Illuminate\Support\ServiceProvider;

class MakeServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        //
    }

    public function register()
    {
        $this->registerModelGenerator();
    }

    private function registerModelGenerator()
    {
        $this->app->singleton('command.isbkch.make', function ($app) {
            return $app['Isbkch\Commands\Commands\MakeCommand'];
        });

        $this->commands('command.isbkch.make');
    }
}
