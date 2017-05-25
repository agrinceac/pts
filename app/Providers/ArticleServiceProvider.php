<?php
namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Symfony\Component\HttpKernel\Tests\Controller;

class ArticleServiceProvider extends ServiceProvider
{

	public function register()
	{
        
	}

	public function boot(Router $router)
	{
		$router->group(['namespace'=>'App\Article\Http\Controllers'], function()
		{
			//include base_path('app/Article/Http' . DIRECTORY_SEPARATOR . 'article_routes.php');
		});
	}
}
