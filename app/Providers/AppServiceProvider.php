<?php

namespace App\Providers;

use App\Models\ContactUs;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
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
        $contactusData = ContactUs::where('id', 1)->get();

        View::share('contactus', $contactusData);

        Paginator::useBootstrap();
        // Paginator::useBootstrap();
    }
}
