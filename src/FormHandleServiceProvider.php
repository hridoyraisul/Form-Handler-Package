<?php
namespace RaisulHridoy\FormHandler;
use Illuminate\Support\ServiceProvider;

 class FormHandleServiceProvider extends ServiceProvider
 {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','FormHandler');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        require_once __DIR__.'/Helpers/NameValidate.php';

    }

    public function register()
    {
        //
    }

}
