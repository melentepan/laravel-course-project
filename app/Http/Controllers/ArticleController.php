<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);

        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'short_desc' => 'required|string|min:5|max:1000',
            'content' => 'required|string|min:10',
            'preview_image' => 'nullable|string|max:255',
            'full_image' => 'nullable|string|max:255',
        ]);

        Article::create($validated);

        return redirect()->route('articles.index')->with('success', 'Новость успешно создана.');
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'short_desc' => 'required|string|min:5|max:1000',
            'content' => 'required|string|min:10',
            'preview_image' => 'nullable|string|max:255',
            'full_image' => 'nullable|string|max:255',
        ]);

        $article->update($validated);

        return redirect()->route('articles.index')->with('success', 'Новость обновлена.');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Новость удалена.');
    }
}
