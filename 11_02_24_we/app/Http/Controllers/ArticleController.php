<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function store(StoreArticleRequest $request){
        Article::create($request->all());
        return redirect()->back()->with(['Succes'=>'Articolo inserito']);
    }
    public function create(){
        return view('form');
    }
}
