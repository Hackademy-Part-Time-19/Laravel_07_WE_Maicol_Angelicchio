<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function store(StoreArticleRequest $request){
        $validated=$request->validated();
        Article::create($validated);
        if($request->hasFile('image')){
            $file = $request->file('image')->store('images');
        }
        return redirect()->back()->with(['success'=>'Articolo inserito']);
    }
    public function create(){
        return view('form');
    }
}
