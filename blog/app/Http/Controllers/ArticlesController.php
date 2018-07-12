<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function store(Request $request) {
      $rules = [
          'title' => 'required|min:3',
          'body' => 'required',
          'published_at' => 'required|date',
      ];
      $this->validate($request, $rules);

      Article::create($request->all());

      return redirect('articles');
    }

    }