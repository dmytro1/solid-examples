<?php

namespace App\Providers;

use App\Repositories\FilesystemLessonRepository;
use App\Repositories\LessonRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(LessonRepositoryInterface::class, function () {
            return new FilesystemLessonRepository();
        });

    }
}
