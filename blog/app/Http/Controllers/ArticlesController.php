<?php
namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleRequest;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except' =>['index','show']]);
    }
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

    public function create() {
      return view('articles.create');
    }

    public function store(ArticleRequest $request) {

      // Article::create($request->all());
      \Auth::user()->articles()->create($request->all());

      \Session::flash('Flash_message','記事を追加しました。');

      return redirect()->route('articles.index');
    }

    public function edit($id){
        $article =Article::findOrFail($id);

        return view('articles.edit',compact('article'));
    }

    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id);

        $article->update($request->all());
         \Flash::success('記事を更新しました。');

        return redirect()->route('articles.show', [$article->id]);

        }

    public function destroy($id) {
        $article = Article::findOrFail($id);

        $article->delete();
        \Flash::success('記事を削除しま
        した。');
         return redirect()->route('articles.index');
    }


    }
