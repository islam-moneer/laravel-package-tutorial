<?php
namespace IslamMoneer\MakeView;

use Illuminate\Support\ServiceProvider;
class MakeViewServiceProvider  extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
//        Load package logic
        $this->loadRoutesFrom(__DIR__.'/view/display-view.php');

    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
{

}