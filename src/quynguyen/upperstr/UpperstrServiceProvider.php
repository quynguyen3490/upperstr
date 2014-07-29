<?php
namespace QuyNguyen3490\UpperStr;

use Illuminate\Support\ServiceProvider;

class UpperstrServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('upperstr', function()
        {
            return new Upperstr;
        });
    }

}