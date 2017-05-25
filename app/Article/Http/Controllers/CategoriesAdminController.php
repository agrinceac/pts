<?php namespace App\Article\Http\Controllers;
use App\Article\Http\Requests\StoreCategoryRequest;
use App\Article\Http\Requests\UpdateCategoryRequest;
use App\Http\Controllers\BaseCategoriesAdminController;
use App\Article\Models\Category;
use View;

class CategoriesAdminController extends BaseCategoriesAdminController
{
	public function __construct()
	{
		$this->middleware('adminRoute');
	}

	protected function getModel()
	{
		return new Category();
	}

	protected function getUrlRoot()
	{
		return '/admin/articles';
	}

	public function store( StoreCategoryRequest $request )
    {
        return parent::_store($request);
    }

	public function update( UpdateCategoryRequest $request, int $id )
    {
        return parent::_update($request, $id);
    }
}
