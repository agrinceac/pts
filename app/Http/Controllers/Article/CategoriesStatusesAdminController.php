<?php
namespace App\Http\Controllers\Article;
use App\Article\Models\CategoryStatus as Status;
use App\Http\Controllers\BaseStatusesAdminController;
use View;

class CategoriesStatusesAdminController extends BaseStatusesAdminController
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	protected function getModel()
	{
		return new Status();
	}

	protected function getUrlRoot()
	{
		return '/admin/articles';
	}
}
