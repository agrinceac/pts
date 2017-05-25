<?php
namespace App\Http\Controllers\Article;
use App\Article\Models\Status;
use App\Http\Controllers\BaseStatusesAdminController;
use View;

class StatusesAdminController extends BaseStatusesAdminController
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
