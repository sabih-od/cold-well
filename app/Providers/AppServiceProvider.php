<?php

namespace App\Providers;

use App\Models\Settings;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $setting = Settings::find(1);
            $count = isset($content) ? $content->getMedia('settings_image')->count() : '';
            $view->with('setting', $setting, compact('count'));
        });
    }
}
