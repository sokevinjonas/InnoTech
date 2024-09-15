<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouterArticle(){
        return view('admins.articles.ajouter-article');
    }
    public function listeArticle(){
        return view('admins.articles.liste-article');
    }
}
