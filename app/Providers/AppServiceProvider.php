<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Service;
use App\Models\Pagemodule;
use App\Models\Contactus;
use App\Models\Sociallink;

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
        Paginator::useBootstrap();
         view()->composer('frontend.master', function ($view) {
            $headerData = Service::get();
            $aboutdata = Pagemodule::where('page_name', 'aboutus')->first();
            $contactus = Contactus::find(1);
            $sociallink = Sociallink::find(1);
            $view->headerData = $headerData;
            $view->aboutdata = $aboutdata;
            $view->contactus = $contactus;
            $view->sociallink = $sociallink;
        });
    }
}
