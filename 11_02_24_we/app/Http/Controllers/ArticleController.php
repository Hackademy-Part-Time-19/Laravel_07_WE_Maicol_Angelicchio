<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(Request $request){

        Article::create($request->all());
        return view('form');
    }
    public function create(){
        return view('form');
    }
}
