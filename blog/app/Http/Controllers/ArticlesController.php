<?php
namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    //
    public function index() {
        // $articles = Article::all();
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article =Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create()
    {
      return view('articles.create');
      // $article =Article::findOrFail($id);
      // return view('articles.create', compact('article'));
    }

    public function store(ArticleRequest $request) {

      Article::create($request->all());
      return redirect('articles');
    }

    public function edit($id){
        $article =Article::findOrFail($id);

        return view('articles.edit',compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);

        $article->updete($request->all());
        return redirect(url('articles',[$article->id]));
    }
    }
