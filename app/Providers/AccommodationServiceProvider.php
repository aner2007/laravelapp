<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AccommodationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
{
    $this->app->bind(
        \App\Repositories\AccommodationRepositoryInterface::class,
        \App\Repositories\Eloquent\AccommodationRepository::class
    );
}

public function boot()
{
    //
}

}
