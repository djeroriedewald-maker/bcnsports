<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/prijzen', [PageController::class, 'prijzen'])->name('prijzen');
Route::get('/rooster', [PageController::class, 'rooster'])->name('rooster');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/over-ons', [PageController::class, 'overOns'])->name('over-ons');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/voorwaarden', [PageController::class, 'voorwaarden'])->name('voorwaarden');

// Sitemap
Route::get('/sitemap.xml', function () {
    $sitemap = \Spatie\Sitemap\Sitemap::create()
        ->add(\Spatie\Sitemap\Tags\Url::create('/')->setPriority(1.0)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/prijzen')->setPriority(0.9)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/rooster')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/contact')->setPriority(0.7)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/over-ons')->setPriority(0.6)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/privacy')->setPriority(0.3)->setChangeFrequency('yearly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/voorwaarden')->setPriority(0.3)->setChangeFrequency('yearly'));

    return $sitemap->toResponse(request());
});
