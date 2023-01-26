<?php

namespace App\Providers;

use App\Models\Invoice\Invoice;
use App\Models\Product\Products;
use App\Models\Reviews\Reviews;
use App\Models\section\Sections;

use Illuminate\Support\Facades\View;
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
        view::share('Invoices',Invoice::with('section')->get());

        view::share('sections',Sections::get());
        view::share('products',Products::with('section')->get());
        view::share('reviews',Reviews::orderByDesc('id')->limit(3)->get());

    }
}
