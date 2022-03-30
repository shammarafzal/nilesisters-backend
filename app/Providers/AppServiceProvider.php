<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Support\Facades\View;

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
        Schema::defaultStringLength(191);
        $users = User::where('is_Admin', 0)->get();
        $posts = Post::all();
        View::share([
            'users' => $users,
            'posts' => $posts,
        ]);
    }
}
