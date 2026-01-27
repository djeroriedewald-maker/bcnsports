<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\ContentController;
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

// English Routes
Route::prefix('en')->group(function () {
    Route::get('/', [PageController::class, 'home'])->name('en.home');
    Route::get('/prices', [PageController::class, 'prijzen'])->name('en.prices');
    Route::get('/schedule', [PageController::class, 'rooster'])->name('en.schedule');
    Route::get('/contact', [PageController::class, 'contact'])->name('en.contact');
    Route::post('/contact', [PageController::class, 'contactSubmit'])->name('en.contact.submit');
    Route::get('/about-us', [PageController::class, 'overOns'])->name('en.about-us');
    Route::get('/business', [PageController::class, 'ondernemers'])->name('en.business');
    Route::get('/privacy', [PageController::class, 'privacy'])->name('en.privacy');
    Route::get('/terms', [PageController::class, 'voorwaarden'])->name('en.terms');
});

// Sitemap
Route::get('/sitemap.xml', function () {
    $sitemap = \Spatie\Sitemap\Sitemap::create()
        // NL URLs
        ->add(\Spatie\Sitemap\Tags\Url::create('/')->setPriority(1.0)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/prijzen')->setPriority(0.9)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/rooster')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/contact')->setPriority(0.7)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/over-ons')->setPriority(0.6)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/ondernemers')->setPriority(0.8)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/privacy')->setPriority(0.3)->setChangeFrequency('yearly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/voorwaarden')->setPriority(0.3)->setChangeFrequency('yearly'))
        // EN URLs
        ->add(\Spatie\Sitemap\Tags\Url::create('/en')->setPriority(1.0)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/prices')->setPriority(0.9)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/schedule')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/contact')->setPriority(0.7)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/about-us')->setPriority(0.6)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/business')->setPriority(0.8)->setChangeFrequency('monthly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/privacy')->setPriority(0.3)->setChangeFrequency('yearly'))
        ->add(\Spatie\Sitemap\Tags\Url::create('/en/terms')->setPriority(0.3)->setChangeFrequency('yearly'));

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
        Route::get('/analytics', [DashboardController::class, 'analytics'])->name('admin.analytics');
        Route::get('/messages', [DashboardController::class, 'messages'])->name('admin.messages');
        Route::post('/messages/bulk', [DashboardController::class, 'bulkAction'])->name('admin.messages.bulk');
        Route::get('/messages/export', [DashboardController::class, 'exportMessages'])->name('admin.messages.export');
        Route::get('/messages/{message}', [DashboardController::class, 'showMessage'])->name('admin.messages.show');
        Route::put('/messages/{message}', [DashboardController::class, 'updateMessageStatus'])->name('admin.messages.update');
        Route::delete('/messages/{message}', [DashboardController::class, 'deleteMessage'])->name('admin.messages.delete');

        // Settings
        Route::get('/password', [SettingsController::class, 'password'])->name('admin.password');
        Route::put('/password', [SettingsController::class, 'updatePassword'])->name('admin.password.update');

        // User management
        Route::get('/users', [SettingsController::class, 'users'])->name('admin.users');
        Route::get('/users/create', [SettingsController::class, 'createUser'])->name('admin.users.create');
        Route::post('/users', [SettingsController::class, 'storeUser'])->name('admin.users.store');
        Route::get('/users/{user}/edit', [SettingsController::class, 'editUser'])->name('admin.users.edit');
        Route::put('/users/{user}', [SettingsController::class, 'updateUser'])->name('admin.users.update');
        Route::delete('/users/{user}', [SettingsController::class, 'deleteUser'])->name('admin.users.delete');

        // Site settings
        Route::get('/site', [SettingsController::class, 'site'])->name('admin.site');
        Route::post('/site/maintenance', [SettingsController::class, 'toggleMaintenance'])->name('admin.site.maintenance');

        // Backups
        Route::get('/backups', [BackupController::class, 'index'])->name('admin.backups');
        Route::post('/backups', [BackupController::class, 'create'])->name('admin.backups.create');
        Route::get('/backups/{filename}/download', [BackupController::class, 'download'])->name('admin.backups.download');
        Route::post('/backups/{filename}/restore', [BackupController::class, 'restore'])->name('admin.backups.restore');
        Route::delete('/backups/{filename}', [BackupController::class, 'delete'])->name('admin.backups.delete');

        // Content Management - FAQs
        Route::get('/faqs', [ContentController::class, 'faqs'])->name('admin.faqs');
        Route::get('/faqs/create', [ContentController::class, 'createFaq'])->name('admin.faqs.create');
        Route::post('/faqs', [ContentController::class, 'storeFaq'])->name('admin.faqs.store');
        Route::get('/faqs/{faq}/edit', [ContentController::class, 'editFaq'])->name('admin.faqs.edit');
        Route::put('/faqs/{faq}', [ContentController::class, 'updateFaq'])->name('admin.faqs.update');
        Route::delete('/faqs/{faq}', [ContentController::class, 'deleteFaq'])->name('admin.faqs.delete');

        // Content Management - Testimonials
        Route::get('/testimonials', [ContentController::class, 'testimonials'])->name('admin.testimonials');
        Route::get('/testimonials/create', [ContentController::class, 'createTestimonial'])->name('admin.testimonials.create');
        Route::post('/testimonials', [ContentController::class, 'storeTestimonial'])->name('admin.testimonials.store');
        Route::get('/testimonials/{testimonial}/edit', [ContentController::class, 'editTestimonial'])->name('admin.testimonials.edit');
        Route::put('/testimonials/{testimonial}', [ContentController::class, 'updateTestimonial'])->name('admin.testimonials.update');
        Route::delete('/testimonials/{testimonial}', [ContentController::class, 'deleteTestimonial'])->name('admin.testimonials.delete');

        // Content Management - Pricing Packages
        Route::get('/packages', [ContentController::class, 'packages'])->name('admin.packages');
        Route::get('/packages/create', [ContentController::class, 'createPackage'])->name('admin.packages.create');
        Route::post('/packages', [ContentController::class, 'storePackage'])->name('admin.packages.store');
        Route::get('/packages/{package}/edit', [ContentController::class, 'editPackage'])->name('admin.packages.edit');
        Route::put('/packages/{package}', [ContentController::class, 'updatePackage'])->name('admin.packages.update');
        Route::delete('/packages/{package}', [ContentController::class, 'deletePackage'])->name('admin.packages.delete');

        // Content Management - Blog Posts
        Route::get('/posts', [ContentController::class, 'posts'])->name('admin.posts');
        Route::get('/posts/create', [ContentController::class, 'createPost'])->name('admin.posts.create');
        Route::post('/posts', [ContentController::class, 'storePost'])->name('admin.posts.store');
        Route::get('/posts/{post}/edit', [ContentController::class, 'editPost'])->name('admin.posts.edit');
        Route::put('/posts/{post}', [ContentController::class, 'updatePost'])->name('admin.posts.update');
        Route::delete('/posts/{post}', [ContentController::class, 'deletePost'])->name('admin.posts.delete');
    });
});
