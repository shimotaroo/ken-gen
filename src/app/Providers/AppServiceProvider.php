<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Permission
        $this->app->bind(
            \App\Repositories\Permission\PermissionRepositoryInterface::class,
            \App\Repositories\Permission\PermissionRepository::class,
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        // CSSやjsの読み込み時のURL(パス)を強制的にhttpsに変更
        if ($this->app->environment() == 'production') {
            URL::forceScheme('https');
        }
    }
}
