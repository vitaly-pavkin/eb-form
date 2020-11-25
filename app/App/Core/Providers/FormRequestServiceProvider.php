<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class FormRequestServiceProvider
 * @package App\Core\Providers
 */
class FormRequestServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \Domain\FormRequest\Repositories\FormRequestRepository::class,
            \Infrastructure\FormRequest\Eloquent\FormRequestRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
