<?php

use App\Http\Controllers\Admin\DashboardControllerA;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\User\DashboardControllerU;
use Illuminate\Support\Facades\Route;

Route::controller(PublicController::class)->group(function () {
    Route::get('/','index')->name('index');
    Route::get('faq','faq')->name('faq');
    Route::get('/blog', 'blog')->name('blog'); // Show all blog posts
    Route::get('/blog/{blog}', 'blogShow')->name('blogShow'); // Single blog post by slug
    Route::get('/blog/category/{category}', 'blogByCategory')->name('blogByCategory'); // Posts by category
});

// Admin routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', [DashboardControllerA::class, 'index'])->name('index');
});

// User routes
Route::prefix('user')->name('user.')->middleware(['auth', 'role:user'])->group(function () {
    Route::get('/', [DashboardControllerU::class, 'index'])->name('index');
});

require __DIR__.'/auth.php';
