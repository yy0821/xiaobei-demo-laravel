<?php
namespace Xiaobei\DemoLaravel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class DemoServiceProvide extends ServiceProvider
{
    public function boot()
    {
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__ . '/resources/views', 'demo'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Xiaobei\DemoLaravel\Http\Controllers',
            'prefix' => 'demo',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
        });
    }
}
?>
