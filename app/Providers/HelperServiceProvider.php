<?php

namespace App\Providers;

use App\Helpers\ShowString;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $path = app_path();
        $dir  = basename($path);

        foreach(glob($path . "/Helpers/*.php") as $filename) {
            $name = basename($filename, '.php');
            $this->app->bind("{$name}", ucwords($dir) . "\Helpers\\{$name}");
        }
        // $this->app->bind('ShowString', function() {
        //     return new ShowString;
        // });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
