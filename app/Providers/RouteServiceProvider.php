<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {
    protected $namespace = 'App\Http\Controllers';

    public function boot() {
        parent::boot();
    }

    public function map() {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapUserRoutes();
        $this->mapSurveyRoutes();
    }

    protected function mapWebRoutes() {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }

    protected function mapApiRoutes() {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }

    protected function mapUserRoutes() {
        Route::prefix('user')
             ->middleware(['web', 'auth'])
             ->namespace($this->namespace)
             ->group(base_path('routes/user.php'));
    }

    protected function mapSurveyRoutes() {
        Route::prefix('survey')
             ->middleware(['web', 'auth'])
             ->namespace($this->namespace)
             ->group(base_path('routes/survey.php'));
    }
}
