<?php

namespace App\Providers;

use App\Models\SettingValue;
use App\Observers\SettingValueObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        SettingValue::observe(SettingValueObserver::class);
    }
}
