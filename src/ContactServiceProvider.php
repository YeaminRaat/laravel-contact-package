<?php

namespace Yeamin\Contact;

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider
{
    public function register()
    {

    }
    public function boot()
    {
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php')
        ],'yeamin-contact-config');

        $this->publishes([
            __DIR__.'/views' => resource_path('views/vendor/contact')
        ],'yeamin-contact-view');
    }
}