<?php
namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;


class ArticlesController extends Controller
{
    //
    public function index() {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        return $id;
    }

    public function create()
    {
      return view('articles.create');
    }

    public function store(ArticleRequest $request) {

      Article::create($request->all());
      return redirect('articles');
    }

    }
