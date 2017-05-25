<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {

    Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {

        /*
         * These routes require no user to be logged in
         */
        Route::group(['middleware' => 'guest'], function () {
            // Authentication Routes
            Route::get('login', 'LoginController@showLoginForm')->name('login');
            Route::post('login', 'LoginController@login')->name('login.post');

            // Socialite Routes
            Route::get('login/{provider}', 'SocialLoginController@login')->name('social.login');

            // Registration Routes
            if (config('access.users.registration')) {
                Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
                Route::post('register', 'RegisterController@register')->name('register.post');
            }

            // Confirm Account Routes
            Route::get('account/confirm/{token}', 'ConfirmAccountController@confirm')->name('account.confirm');
            Route::get('account/confirm/resend/{user}', 'ConfirmAccountController@sendConfirmationEmail')->name('account.confirm.resend');

            // Password Reset Routes
            Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
            Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email.post');

            Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
            Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');
        });
    });

    Route::get('/', 'FrontendController@index')->name('index');

});

/* ----------------------------------------------------------------------- */

Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {

    Route::get('admin', 'DashboardController@index')->name('dashboard');

    Route::group(['namespace' => 'User'], function () {

        Route::get('admin/account', 'AccountController@index')->name('account');
        Route::patch('admin/profile/update', 'ProfileController@update')->name('profile.update');
    });

    Route::group(['namespace' => 'Auth'], function () {

        Route::post('logout', 'LoginController@logout')->name('logout');

        //For when admin is logged in as user from backend
        Route::get('logout-as', 'LoginController@logoutAs')->name('logout-as');

        // Change Password Routes
        Route::patch('admin/password/change', 'ChangePasswordController@changePassword')->name('password.change');

    });

});

Route::group(['namespace' => 'Article', 'middleware' => 'auth'], function () {

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

Route::group(['namespace' => 'Article', 'middleware' => 'guest'], function () {

    Route::get('/api/articles/{alias}', [
        'as' => 'articles.show',
        'uses' => 'ArticleController@byAliasJson'
    ]);

});