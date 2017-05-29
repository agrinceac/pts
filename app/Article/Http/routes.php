<?php

Route::group(['middleware' => 'web'], function ()
{
    Route::get('api/admin/articles/variables', 'ArticleVariablesController@index');
    Route::post('api/admin/articles/variables', 'ArticleVariablesController@save');
    Route::post('api/admin/articles/{articleId}/images/upload', 'ImagesAdminController@upload');
    Route::get('api/admin/articles/categories/statuses', 'CategoriesStatusesAdminController@index');
    Route::get('api/admin/articles/{articleId}/images', 'ImagesAdminController@images');
    Route::put('api/admin/articles/{articleId}/images/remove', 'ImagesAdminController@remove');
	Route::resource('api/admin/articles/categories', 'CategoriesAdminController');
	Route::resource('api/admin/articles/statuses', 'StatusesAdminController');
	Route::resource('api/admin/articles', 'ArticleAdminController');
});

Route::get('articles/{slug}', [
	'as' => 'articles.show',
	'uses' => 'ArticleController@show'
]);

Route::get('/api/articles/indexArticles', 'ArticleController@indexArticles');
Route::get('/api/articles/benefitArticles', 'ArticleController@benefitArticles');
Route::get('/api/articles/faq', 'ArticleController@faq');
Route::get('/api/articles/variables', 'ArticleController@variables');

Route::get('/api/articles/{alias}', [
    'as' => 'articles.show',
    'uses' => 'ArticleController@byAliasJson'
]);

Route::get('categories', 'ArticleController@getCategories');
Route::get('articlesByCatId/{categoryId}', 'ArticleController@getArticlesByCategoryId');
Route::get('category/{categoryId}', 'ArticleController@getCategory');
Route::get('articles', 'ArticleController@getArticles');