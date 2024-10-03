<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\PublicAuthenticatedSessionController;

Route::name('public.')->group(function () {
    // Route::get('home', [PublicPagesController::class, 'home']);

    Route::name('blog.')->group(function () {
        Route::controller(BlogController::class)->group(function () {
            Route::get('posts', 'index')->name('index');
            Route::get('posts/{post}', 'show')->name('show');
            Route::get('posts/category/{category}', 'category')->name('category');
        });

        // Route::resource('comments', PostCommentController::class)->only(['store', 'update', 'destroy'])->middleware('auth');
    });

    Route::middleware('guest')->group(function () {
        Route::get('login', [PublicAuthenticatedSessionController::class, 'create'])->name('login');
        Route::post('login', [PublicAuthenticatedSessionController::class, 'store']);
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store']);
    });

    Route::middleware('auth')->group(function () {
        Route::post('logout', [PublicAuthenticatedSessionController::class, 'destroy'])->name('logout');

        Route::controller(PublicProfileController::class)->name('profile.')->group(function () {
            Route::get('profile', 'index')->name('index');
            Route::put('profile/update', 'updateUserData')->name('update');
        });
    });

    Route::controller(PublicPagesController::class)->name('pages.')->group(function () {
        Route::get('contact', 'contact')->name('contact');
        Route::get('about', 'about')->name('about');
        Route::get('terms', 'terms')->name('terms');
        Route::get('home', 'home')->name('home');
    });
});
