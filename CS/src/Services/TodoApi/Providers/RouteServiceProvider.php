<?php
namespace App\Services\TodoApi\Providers;

use Illuminate\Routing\Router;
use Lucid\Foundation\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Read the routes from the "routes.php" file of this Service
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function map(Router $router)
    {
        $namespace = 'App\Services\TodoApi\Http\Controllers';
        $routesPath = __DIR__.'/../Http/routes.php';

        $this->loadRoutesFile($router, $namespace, $routesPath);
    }
}
