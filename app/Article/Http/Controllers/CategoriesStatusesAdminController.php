<?php namespace App\Article\Http\Controllers;
use App\Article\Models\CategoryStatus as Status;
use App\Http\Controllers\BaseStatusesAdminController;
use View;

class CategoriesStatusesAdminController extends BaseStatusesAdminController
{
	public function __construct()
	{
		$this->middleware('adminRoute');
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
