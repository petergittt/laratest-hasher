<?php

namespace Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('md5hash',function(){
        	return new MD5Hasher();
        });//app('md5hash')
    }
}
