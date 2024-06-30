<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index');
    }

    public function show($slug)
    {
        return view('articles.show');
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'title' => 'required|unique:articles|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles|max:255',
        ]);

        $article = new Article;

        $article->title = $request->title;
        $article->content = $request->content;
        $article->slug = $request->slug;

        $article->save();
    }

    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        // Validate the request...
        $request->validate([
            'title' => 'required|unique:articles,title,'.$id.'|max:255',
            'content' => 'required',
            'slug' => 'required|unique:articles,slug,'.$id.'|max:255',
        ]);

        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        $article->slug = $request->slug;

        $article->save();

        return redirect('/dashboard/article/'.$article->id.'/edit');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
    }
}
