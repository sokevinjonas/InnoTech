<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouterArticle()
    {
        return view('admin.articles.ajouter-article');
    }
    public function listeArticle()
    {
        return view('admin.articles.liste-article');
    }
}
