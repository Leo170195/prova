<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        $articles = Article::all();
        return view('articles', compact('articles'));
    }

    public function article($article){
        $article = Article::find($article);
        return view('article', compact('article'));
    }

    public function modify($article){
        $article = Article::find($article);
        // dd($article);
        return view('modify', compact('article'));
    }

    // public function modify(Request $request,  Article $article){
        
    //     $article->name = $request->name;
    //     $article->surname = $request->surname;
    //     if ($request->img) {
    //         $article->img = $request->file('img')->store('public/img');
    //     }
    //     $article->save();
   
    //     return redirect('modify', compact('article'));
    // }
}
