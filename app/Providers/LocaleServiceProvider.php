<?php

namespace App\Providers;

use App\Helpers\LocaleHelper;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class LocaleServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with('currentLocale', app()->getLocale());
            $view->with('switchLanguageUrl', LocaleHelper::switchLanguageUrl());
            $view->with('hreflangUrls', LocaleHelper::getHreflangUrls());
        });
    }
}
