<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\PublicProfileController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\PublicAuthenticatedSessionController;
use App\Http\Controllers\PublicAuthentificationController;

Route::redirect('/', '/home');

//Cette route retourne la page login pour les admins
Route::get('admin-login', [AuthentificationController::class, 'loginAdmin'])->name('login');
Route::get('logout', [AuthentificationController::class, 'logout']);
Route::post('admin-autentificate', [AuthentificationController::class, 'authenticate']); //route pour la logique de Login

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('ajouter-article', [ArticleController::class, 'ajouterArticle']);
    Route::get('profile', [ProfileController::class, 'pageProfile'])->name('profile');
    Route::resource('post_categories', PostCategoryController::class);

    Route::resource('posts', PostController::class);
});


Route::name('public.')->group(function () {

    Route::get('login', [PublicAuthentificationController::class, 'create'])->name('login');
    Route::post('login', [PublicAuthentificationController::class, 'store']);

    Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::post('logout', [PublicAuthentificationController::class, 'destroy'])->name('logout');


    Route::name('blog.')->group(function () {
        Route::controller(BlogController::class)->group(function () {
            Route::get('posts', 'index')->name('index');
            Route::get('posts/{post}', 'show')->name('show');
            Route::get('posts/category/{category}', 'category')->name('category');
        });

        Route::resource('comments', PostCommentController::class)->only(['store', 'update', 'destroy'])->middleware('auth');
    });


    Route::controller(PublicPagesController::class)->name('pages.')->group(function () {
        Route::get('contact', 'contact')->name('contact');
        Route::get('about', 'about')->name('about');
        Route::get('terms', 'terms')->name('terms');
        Route::get('home', 'home')->name('home');
    });
});
