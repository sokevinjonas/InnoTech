<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\PostController;

Route::redirect('/', 'admin/profile');

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
