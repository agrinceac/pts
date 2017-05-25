<?php
namespace App\Http\Controllers\Article;

use App\Article\Http\Requests\StoreArticleRequest;
use App\Article\Http\Requests\UpdateArticleRequest;
use App\Article\Models\Article;
use App\Article\Repositories\ArticleRepo;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ArticleAdminController extends BaseController
{
	protected $modelClassName = 'App\Article\Models\Article';

    public function __construct()
    {
		$this->middleware('auth');
    }

	public function index()
	{
		return $this->showAll();
	}

	public function showAll()
	{
	    $repo = new ArticleRepo();

        if ( Input::get('name') ) {
            $repo->filterByName( Input::get('name') );
        }

        if ( Input::get('text') ) {
            $repo->filterByText( Input::get('text') );
        }

        if ( Input::get('statusId') ) {
            $repo->filterByStatus( Input::get('statusId') );
        }

        if ( Input::get('categoryId') ) {
            $repo->filterByCategory( Input::get('categoryId') );
        }

        if ( Input::get('objectId') )
            $repo->filterById( Input::get('objectId') );

        $articles = $repo->get();

		return response()->json($articles->paginate(10));
	}

	public function destroy($id)
	{
        $articles = new Article();
        $article  = $articles->findOrFail($id);

        if ( ! $article->delete())
        {
            return response()->json(['result'=>false, 'error'=>"Something went wrong when deleting Article with ID {$id}"]);
        }

        return response()->json(true);
	}

	public function create()
	{
		throw new \Exception('Not necessary');
	}

	public function store( StoreArticleRequest $request )
	{
		$article     = new Article();

		$article->authorId        = Auth::id();
		$article->name            = $request->input('name');
		$article->alias           = $request->input('alias');
		$article->h1              = $request->input('h1');
		$article->description     = $request->input('description');
		$article->text            = $request->input('text');
		$article->statusId        = $request->input('statusId');
		$article->categoryId      = $request->input('categoryId');
		$article->metaTitle       = $request->input('metaTitle');
		$article->metaKeywords    = $request->input('metaKeywords');
		$article->metaDescription = $request->input('metaDescription');
		$article->save();

		return response()->json($article->id);
	}

	public function show($id)
	{
		$articles = new Article();
		$article = $articles->findOrFail($id);

		return response()->json( $article );
	}

	public function update( UpdateArticleRequest $request, $id)
	{
        $articles = new Article();
        $article = $articles->findOrFail($id);

		$article->authorId        = Auth::id();
		$article->name            = $request->input('name');
		$article->alias           = $request->input('alias');
		$article->h1              = $request->input('h1');
		$article->description     = $request->input('description');
		$article->text            = $request->input('text');
		$article->statusId        = $request->input('statusId');
		$article->categoryId      = $request->input('categoryId');
		$article->metaTitle       = $request->input('metaTitle');
		$article->metaKeywords    = $request->input('metaKeywords');
		$article->metaDescription = $request->input('metaDescription');
        $article->save();

        return response()->json($article->id);
	}
}