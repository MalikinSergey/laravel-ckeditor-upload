<?php

namespace Mlsg\LaravelCkeditorUpload;

use Illuminate\Support\ServiceProvider;

/**
 * Class NiceCoreServiceProvider
 * @package Nice\Core
 */
class LaravelCkeditorUploadProvider extends ServiceProvider
{

    /**
     * Register application services.
     *
     * @return void
     */
    public function register()
    {


        $this->mergeConfigFrom(
            __DIR__ . '/../config/ckeditor-upload.php', 'ckeditor-upload'
        );

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->publishes([
            __DIR__ . '/../config/ckeditor-upload.php' => config_path('ckeditor-upload.php')
        ]);

    }


}
