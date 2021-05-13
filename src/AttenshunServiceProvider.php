<?php


namespace SimplyUnnamed\Seat\Attenshun;


use Seat\Services\AbstractSeatPlugin;

class AttenshunServiceProvider extends AbstractSeatPlugin
{

    public function boot(){
        $this->add_view();

        $this->add_routes();

        $this->add_migrations();

        $this->add_routes();
    }

    public function register(){
        $this->registerPermissions(
            __DIR__ . '/Config/permissions/attenshun.permissions.php',
            'attenshun');

        //Register Sidebar
        $this->mergeConfigFrom(
            __DIR__.'/Config/attenshun.sidebar.php',
            'package.sidebar'
        );
    }


    public function getVersion(): string{
        return "1.0";
    }

    public function getName(): string
    {
        return 'Attenshun';
    }

    public function getPackageRepositoryUrl(): string
    {
        return '';
    }

    public function getPackagistPackageName(): string
    {
        return 'Attenshun';
    }

    public function getPackagistVendorName(): string
    {
        return 'SimplyUnnamed';
    }

    private function add_view()
    {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'attenshun');
    }

    private function add_routes(){
        if(!$this->app->routesAreCached()){
            include __DIR__.'/Http/routes.php';
        }
    }

    //register migrations
    public function add_migrations(){
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
}