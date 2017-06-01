<?php namespace App\Article\Http\Controllers;

use App\Article\Models\Article;
use App\Article\Models\ArticleVariable;
use App\Article\Models\Category;
use App\Article\Repositories\ArticleRepo;
use Illuminate\Routing\Controller as BaseController;
use View;


class ArticleController extends BaseController {

	public function show($slug)
	{
        $article  = Article::findOrFail($slug);

		return View::make('articles.show', [ 'article' => $article ]);
	}

	public function showJson($slug)
	{
		$article  = Article::findOrFail($slug);
		return response()->json($article);
	}

    public function byAliasJson($alias)
    {
        $article  = Article::where('alias', $alias)->with('images')->first();
        return response()->json($article);
    }

    public function indexArticles()
    {
        $articles = Article::where('categoryId', Article::CATEGORY_INDEX)->where('statusId', Article::STATUS_ACTIVE)->get();
        return response()->json($articles);
    }

    public function benefitArticles()
    {
        $articles = Article::where('categoryId', Article::CATEGORY_BENEFIT)->where('statusId', Article::STATUS_ACTIVE)->get();
        return response()->json($articles);
    }

    public function faq()
    {
        $articles = Article::where('categoryId', Article::FAQ_CATEGORY_ID)->where('statusId', Article::STATUS_ACTIVE)->get();
        return response()->json($articles);
    }

    public function variables()
    {
        $articleVariables = ArticleVariable::all();

        return response()->json($articleVariables);
    }

    public function getCategories()
    {
        return response()->json( (new Category())->get() );
    }

    public function getArticlesByCategoryId($categoryId)
    {
        return response()->json( ((new ArticleRepo())->filterByCategory($categoryId)->get()->get()) );
    }

    public function getCategory($categoryId)
    {
        return response()->json( Category::findOrFail($categoryId) );
    }

    public function getArticles()
    {
        return response()->json( Article::get() );
    }
}