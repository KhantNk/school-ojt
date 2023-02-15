<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\Services\CourseServiceInterface;
use App\Contracts\Dao\CourseDaoInterface;
use App\Dao\CourseDao;
use App\Services\CourseService;

use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CourseDaoInterface::class, courseDao::class);
        $this->app->bind(CourseServiceInterface::class, courseService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useBootstrap();
    }
}
