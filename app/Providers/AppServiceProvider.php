<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Page;
use Illuminate\Support\Facades\Schema;
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
        view()->share('lan', app()->getLocale());
        if (Schema::hasTable('company_infos')) {
            $company = CompanyInfo::where('id', 1)->first();
            view()->share('company', $company);
        };
        if (Schema::hasTable('categories')) {
            $categories = Category::with('subcategories', 'subcategories.childcategories')->where('status', 1)->get();
            view()->share('categories', $categories);
        };
        Paginator::useBootstrap();
        $pages = Page::where('status', 1)->select(['id', 'title', 'slug','bn_title'])->get();
        view()->share('pages', $pages);
        view()->share('lang', session()->get('language'));

    }
}
