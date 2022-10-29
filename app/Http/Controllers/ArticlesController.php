<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function store(Request $request){
        $data = $request->only(['title', 'content']);

        $article = Article::create([
            'title'=>$data['title'],
            'body'=>$data['content']
        ]);
        if ($article) return redirect()->back();
    }

    public function destroy(Request $request){
        $article = Article::find($request->id);

        if (!$article){
            return abort(404);
        }

        $article->delete();
        return redirect()->back();
    }
    public function update(Request $request){

        $data = $request->only(['title', 'content', 'id']);
        var_dump($data);
        $aricle = Article::find($request->id);
        if(!$aricle) return abort(404);
        $aricle->title = $data['title'];
        $aricle->body = $data['content'];
        $aricle->save();

        return redirect()->route('blog');
    }
}
