<?php
namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapApiRoutes(); // This is important!
    }

    public function mapApiRoutes()
    {
        Route::prefix('api')  // API routes will be prefixed with /api
        ->namespace($this->namespace)
            ->group(base_path('routes/api.php')); // Make sure it loads routes/api.php
    }

}
