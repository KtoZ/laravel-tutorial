<?php

namespace App\Providers;

use App\Services\PhotoService;
use App\Services\PhotoServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // todo 02: AppServiceProvider にバインドを追加
        $this->app->bind(
            PhotoServiceInterface::class,
            PhotoService::class
        );
    }
}
