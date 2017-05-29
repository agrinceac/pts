<?php
namespace App\Article;

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
            include 'Http' . DIRECTORY_SEPARATOR . 'routes.php';
        });
    }
}
