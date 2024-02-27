<?php

namespace App\Providers;

use App\Models\Company;
use App\Observers\CompanyObserver;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Schema;
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
        Paginator::useBootstrap();

        if (config('app.env') == 'production') {
            URL::forceScheme('https');
        }

        Schema::defaultstringLength(191);

        Company::observe(CompanyObserver::class);
    }
}
