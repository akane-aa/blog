<?php

namespace App\Http\Controllers;

use App\Article;
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

    public function store() {
        // ①フォームの入力値を取得
        $inputs = \Request::all();

        // ②マスアサインメントを使って、記事をDBに作成
        Article::create($inputs);

        // ③記事一覧へリダイレクト
        return redirect('articles');    
    }
}
