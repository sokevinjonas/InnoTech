<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostCategoryController;
use App\Http\Controllers\ProfileController;

Route::redirect('/', 'profile');


Route::get('profile', [ProfileController::class, 'pageProfile']);
Route::get('ajouter-article', [ArticleController::class, 'ajouterArticle']);

Route::resource('post_categories', PostCategoryController::class);
