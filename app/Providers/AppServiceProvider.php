<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Set default pagination
        Paginator::defaultView('vendor.pagination.bootstrap-4');

        // Add custom directives
        Blade::if('admin', function () {
            return auth()->check() && auth()->user()->is_admin;
        });
        Blade::if('user', function () {
            return auth()->check() && !auth()->user()->is_admin;
        });

//        dd(auth()->check());

        // Add global variables
//        if(Auth::check()){
//            $questions_times = Auth::user()->questions_times;
//            $questions_times_today = Auth::user()->questions_times_today;
//            $questions_corrects = Auth::user()->questions_corrects;
//            $tasks_times = Auth::user()->tasks_times;
//            $tasks_corrects = Auth::user()->tasks_corrects;
//            $variables = [
//                'questions_times' => $questions_times,
//                'questions_times_today' => $questions_times_today,
//                'questions_corrects' => $questions_corrects,
//                'tasks_times' => $tasks_times,
//                'tasks_corrects' => $tasks_corrects,
//            ];
//            dd($variables);
//            view()->share();
//        }
    }
}
