<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    protected static $repositories = [
        'book' => [
            \App\Repositories\Contracts\BookInterface::class,
            \App\Repositories\Eloquent\BookRepositoryEloquent::class,
        ],
        'user' => [
            \App\Repositories\Contracts\UserInterface::class,
            \App\Repositories\Eloquent\UserRepositoryEloquent::class,
        ],
        'blog' => [
            \App\Repositories\Contracts\BlogInterface::class,
            \App\Repositories\Eloquent\BlogRepositoryEloquent::class,
        ],
        'comment' => [
            \App\Repositories\Contracts\CommentInterface::class,
            \App\Repositories\Eloquent\CommentRepositoryEloquent::class,
        ],
        'report' => [
            \App\Repositories\Contracts\ReportInterface::class,
            \App\Repositories\Eloquent\ReportRepositoryEloquent::class,
        ]
    ];
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (static::$repositories as $repository) {
            $this->app->singleton(
                $repository[0],
                $repository[1]
            );
        }
    }
}
