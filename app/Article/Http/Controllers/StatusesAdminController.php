<?php namespace App\Article\Http\Controllers;
use App\Article\Models\Status;
use App\Http\Controllers\BaseStatusesAdminController;
use View;

class StatusesAdminController extends BaseStatusesAdminController
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
