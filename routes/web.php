<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/prijzen', [PageController::class, 'prijzen'])->name('prijzen');
Route::get('/rooster', [PageController::class, 'rooster'])->name('rooster');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/over-ons', [PageController::class, 'overOns'])->name('over-ons');
Route::get('/ondernemers', [PageController::class, 'ondernemers'])->name('ondernemers');
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
        ->add(\Spatie\Sitemap\Tags\Url::create('/ondernemers')->setPriority(0.8)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/privacy')->setPriority(0.3)->setChangeFrequency('yearly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/voorwaarden')->setPriority(0.3)->setChangeFrequency('yearly'));

    return $sitemap->toResponse(request());
});

// Admin Routes
Route::prefix('admin')->group(function () {
    // Auth routes (guest only)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('admin.login');
        Route::post('/login', [AuthController::class, 'login']);
    });

    // Protected routes (auth required)
    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout'])->name('admin.logout');
        Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/messages', [DashboardController::class, 'messages'])->name('admin.messages');
        Route::get('/messages/{message}', [DashboardController::class, 'showMessage'])->name('admin.messages.show');
        Route::put('/messages/{message}', [DashboardController::class, 'updateMessageStatus'])->name('admin.messages.update');
        Route::delete('/messages/{message}', [DashboardController::class, 'deleteMessage'])->name('admin.messages.delete');
    });
});
