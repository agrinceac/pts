<?php namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Noop;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use View;

abstract class BaseCategoriesAdminController extends BaseController
{
	abstract protected function getModel();
	abstract protected function getUrlRoot();

	protected function getTplRoot()
	{
		return 'admin.categories';
	}

	public function __construct()
	{
	}

	public function index()
	{
		return $this->showAll();
	}

	public function showAll()
	{
		return response()->json( $this->getModel()->with('status', 'parent')->paginate(50) );
	}

	public function show($slug)
	{
		$categories = $this->getModel();
		$category   = $categories->find($slug);

		return response()->json( $category );
	}

    /**
     * @return mixed
     */
	public function create()
	{
		$category     = new Noop();
		$categories   = $this->getModel();

		return View::make($this->getTplRoot().'.create', [
			'category'   => $category,
			'categories' => $categories,
			'urlRoot'    => $this->getUrlRoot()
		]);
	}

    /**
     * @param $id
     * @return mixed
     */
	public function edit($id)
	{
		$categories = $this->getModel();
		$category   = $categories->findOrFail($id);

		return View::make($this->getTplRoot().'.edit', [
			'category'   => $category,
			'categories' => $categories,
			'urlRoot'    => $this->getUrlRoot()
		]);
	}

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
	public function destroy($id)
	{
		$categories = $this->getModel();
		$category = $categories->findOrFail($id);

		if ( ! $category->delete())
		{
			return response()->json(['result'=>false, 'error'=>"Something went wrong when deleting Service category with ID {$id}"]);
		}

		return response()->json(true);
	}

    /**
     * @param $request
     * @return \Illuminate\Http\JsonResponse
     */
	protected function _store( $request )
	{
		$category     = $this->getModel();

		$category->authorId    = Auth::id();
		$category->name        = $request->input('name');
		$category->statusId    = $request->input('statusId');
		$category->description = $request->input('description');
		$category->alias       = $request->input('alias');
		$category->parentId    = $request->input('parentId');

		$category->save();

		return response()->json($category->id);
	}

    /**
     * @param $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    protected function _update( $request, $id )
	{
		$categories = $this->getModel();
		$category   = $categories->findOrFail($id);

		$category->authorId    = Auth::id();
        $category->name        = $request->input('name');
        $category->statusId    = $request->input('statusId');
        $category->description = $request->input('description');
        $category->alias       = $request->input('alias');
        $category->parentId    = $request->input('parentId');

		$category->save();

		return response()->json($category->id);
	}
}
