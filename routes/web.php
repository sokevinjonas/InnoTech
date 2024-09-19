<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\ProfileController;

Route::redirect('/', 'admin/profile');




Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('ajouter-article', [ArticleController::class, 'ajouterArticle']);
    Route::get('profile', [ProfileController::class, 'pageProfile'])->name('profile');
    Route::resource('post_categories', PostCategoryController::class);
});
