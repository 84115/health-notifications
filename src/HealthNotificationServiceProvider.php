<?php

namespace J84115\HealthNotification;
 
use Illuminate\Support\ServiceProvider;
 
class HealthNotificationServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }
 
    public function boot()
    {
        if (file_exists($file = __DIR__.'/helpers.php')) {
            require $file;
        }
    }
}
