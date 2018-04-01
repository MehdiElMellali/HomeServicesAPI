<?php

namespace App\Providers;

use App\Repositories\Services\EloquentService;
use App\Repositories\Services\ServiceInterface;
use Illuminate\Support\ServiceProvider;

class InterFaceBind extends ServiceProvider
{


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
         $this->app->bind(
             'App\Repositories\Services\ServiceInterface',
            'App\Repositories\Services\EloquentService'
        );
    }
}
