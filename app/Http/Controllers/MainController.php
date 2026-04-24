<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        $path = public_path('articles.json');
        $json = file_get_contents($path);
        $articles = json_decode($json, true);

        foreach ($articles as $index => $article) {
            $articles[$index]['id'] = $index + 1;
        }

        return view('home', ['articles' => $articles]);
    }

    public function gallery($id)
    {
        $path = public_path('articles.json');
        $json = file_get_contents($path);
        $articles = json_decode($json, true);

        $article = null;

        foreach ($articles as $index => $item) {
            if (($index + 1) == $id) {
                $article = $item;
                $article['id'] = $index + 1;
                break;
            }
        }

        if (!$article) {
            abort(404);
        }

        return view('gallery', ['article' => $article]);
    }
}
