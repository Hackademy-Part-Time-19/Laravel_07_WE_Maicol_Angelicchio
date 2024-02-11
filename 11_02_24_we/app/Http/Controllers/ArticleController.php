<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function SaveDB(){
        Article::create(['title'=>'titolo', 'category'=>'categoria', 'description'=>'descrizione', 'body'=>'corpo']);
    }
}
