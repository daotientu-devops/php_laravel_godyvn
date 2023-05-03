<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth::routes();
// Authentication Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['uses' => 'Auth\LoginController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => 'password.update',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);
// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'uses' => 'Auth\RegisterController@register'
]);
Route::group(['middleware' => 'auth'], function () {
    // Trang dashboard
    Route::get('/', 'DashboardController@index');
    // Trang quản trị category
    Route::group(['prefix' => 'categories', 'as' => 'categories'], function () {
        Route::get('/', ['uses' => 'CategoryController@index']);
        Route::get('/{id?}', ['as' => 'index', 'uses' => 'CategoryController@index']);
        Route::post('/store', ['as' => 'store', 'uses' => 'CategoryController@store']);
        Route::get('/show/{id?}', ['as' => 'show', 'uses' => 'CategoryController@show']);
        Route::get('/edit/{id?}', ['as' => 'edit', 'uses' => 'CategoryController@edit']);
        Route::post('/update/{id?}', ['as' => 'update', 'uses' => 'CategoryController@update']);
        Route::get('/delete/{id?}', ['as' => 'delete', 'uses' => 'CategoryController@destroy']);
    });
    // QUẢN TRỊ TAGS
    Route::group(['prefix' => 'tags',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'TagsController@index']);
        Route::post('/store', ['uses' => 'TagsController@store']);
        Route::get('/show/{id?}', ['uses' => 'TagsController@show']);
        Route::get('/edit/{id?}', ['uses' => 'TagsController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'TagsController@update']);
        Route::get('/delete/{id?}', ['uses' => 'TagsController@destroy']);
        Route::get('/search', ['uses' => 'TagsController@begin_search']);
        Route::post('/search', ['uses' => 'TagsController@ajax_search']);
        Route::post('/addtags', ['uses' => 'TagsController@add_tags']);
    });
    // Quản lý điểm đến
    Route::group(['prefix' => 'locations', 'as' => 'locations'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'LocationController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'LocationController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'LocationController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'LocationController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'LocationController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'LocationController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'LocationController@destroy']);
    });
    // Trang quản trị các page tĩnh
    Route::group(['prefix' => 'page', 'as' => 'page', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PageController@index']);
        Route::get('/create', ['uses' => 'PageController@create']);
        Route::post('/store', ['uses' => 'PageController@store']);
        Route::get('/show/{id?}', ['uses' => 'PageController@show']);
        Route::get('/edit/{id?}', ['uses' => 'PageController@edit']);
        Route::post('/update/{id?}', ['uses' => 'PageController@update']);
        Route::get('/delete/{id?}', ['uses' => 'PageController@destroy']);
    });
    // Các trang tin tức
    // Route cũ
    Route::group(['prefix' => 'posts', 'as' => 'posts', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'BlogController@index']);
        Route::get('/create/{type}', ['as' => 'create', 'uses' => 'BlogController@create']);
        Route::post('/store/{type}', ['as' => 'store', 'uses' => 'BlogController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'BlogController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'BlogController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'BlogController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'BlogController@destroy']);
        Route::get('/preview/{id}', ['as' => 'preview', 'uses' => 'BlogController@preview']);
        Route::get('/search', ['as' => 'search', 'uses' => 'BlogController@search']);
    });
    // Trang quản trị những câu hỏi thường gặp
    Route::group(['prefix' => 'frequently-questions', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'QuestionController@index']);
        Route::get('/create', ['uses' => 'QuestionController@create']);
        Route::post('/store', ['uses' => 'QuestionController@store']);
        Route::get('/show/{id?}', ['uses' => 'QuestionController@show']);
        Route::get('/show/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'QuestionController@show']);
        Route::get('/edit/{id?}', ['uses' => 'QuestionController@edit']);
        Route::get('/edit/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'QuestionController@edit']);
        Route::post('/update/{id?}', ['uses' => 'QuestionController@update']);
        Route::get('/delete/{id?}', ['uses' => 'QuestionController@destroy']);
    });
    Route::group(['prefix' => 'frequently-answers', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'AnswerController@index']);
        Route::get('/create', ['uses' => 'AnswerController@create']);
        Route::post('/store', ['uses' => 'AnswerController@store']);
        Route::get('/show/{id?}', ['uses' => 'AnswerController@show']);
        Route::get('/edit/{id?}', ['uses' => 'AnswerController@edit']);
        Route::post('/update/{id?}', ['uses' => 'AnswerController@update']);
        Route::get('/delete/{id?}', ['uses' => 'AnswerController@destroy']);
        Route::get('/index/all', ['uses' => 'AnswerController@indexAllAnswersToElasticsearch']);
    });
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    // Trang quản trị role
    Route::group(['prefix' => 'roles', 'as' => 'roles', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'RoleController@index']);
        Route::get('/create', ['uses' => 'RoleController@create']);
        Route::post('/store', ['uses' => 'RoleController@store']);
        Route::get('/show/{id?}', ['uses' => 'RoleController@show']);
        Route::get('/edit/{id?}', ['uses' => 'RoleController@edit']);
        Route::post('/update/{id?}', ['uses' => 'RoleController@update']);
        Route::get('/delete/{id?}', ['uses' => 'RoleController@destroy']);
    });
    // Trang quản trị user
    Route::group(['prefix' => 'users', 'as' => 'users', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('/create', ['uses' => 'UserController@create']);
        Route::post('/store', ['uses' => 'UserController@store']);
        Route::get('/show/{id?}', ['uses' => 'UserController@show']);
        Route::get('/edit/{id?}', ['uses' => 'UserController@edit']);
        Route::post('/update/{id?}', ['uses' => 'UserController@update']);
        Route::get('/delete/{id?}', ['uses' => 'UserController@destroy']);
    });
    // Cấu hình website
    Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'SettingController@index']);
        Route::post('/allowGetDynamicContent', ['uses' => 'SettingController@allowGetDynamicContent']);
    });
    // Quản trị thông tin website
    Route::group(['prefix' => 'contact', 'as' => 'settings', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'SettingController@contact']);
        Route::post('/store', ['uses' => 'SettingController@storeContact']);
    });
    Route::post('/html/update', ['uses' => 'SettingController@updateHTML']);
    // QUẢN TRỊ BANNER
    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'BannersController@index']);
        Route::get('/top', ['as' => 'index', 'uses' => 'BannersController@index']);
        Route::post('/store', ['uses' => 'BannersController@store']);
        Route::get('/show/{id?}', ['uses' => 'BannersController@show']);
        Route::get('/edit/{id?}', ['uses' => 'BannersController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'BannersController@update']);
        Route::get('/delete/{id?}', ['uses' => 'BannersController@destroy']);
        Route::get('/search', ['uses' => 'BannersController@search_form']);
        Route::post('/search', ['uses' => 'BannersController@search_submit']);
    });
    Route::group(['prefix' => 'category-banner',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CategoryHasBannerController@index']);
        Route::get('/show/{id?}', ['uses' => 'CategoryHasBannerController@show']);
        Route::get('/edit/{id?}', ['uses' => 'CategoryHasBannerController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'CategoryHasBannerController@update']);

        Route::match(['get', 'post'], '/bannertop', ['uses' => 'TemplateController@banner_top_categories']);
        Route::match(['get', 'post'], '/bannerleft', ['uses' => 'TemplateController@banner_left_categories']);
    });
    // Tài khoản của tôi
    Route::group(['prefix' => 'account'], function () {
        Route::match(array('GET', 'POST'), '/profile', ['uses' => 'MyAccountController@profile']);
    });
    // Trang quản trị widget
    Route::group(['prefix' => 'widgets'], function () {
        Route::get('/{page}/{position}/{id?}', ['uses' => 'WidgetController@getPosition']);
        Route::post('/{page}/{position}', ['uses' => 'WidgetController@postPosition']); // Vì sao nên mua
    });
    // Quản lý đối tác
    Route::group(['prefix' => 'partners'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'PartnersController@index']);
        Route::post('/store', ['uses' => 'PartnersController@store']);
        Route::get('/show/{id?}', ['uses' => 'PartnersController@show']);
        Route::get('/edit/{id?}', ['uses' => 'PartnersController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'PartnersController@update']);
        Route::get('/delete/{id?}', ['uses' => 'PartnersController@destroy']);
    });
    // Quản lý comment (Đối tác nói về chúng tôi)
    Route::group(['prefix' => 'comments'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CommentController@index']);
        Route::post('/store', ['uses' => 'CommentController@store']);
        Route::get('/edit/{id?}', ['uses' => 'CommentController@edit']);
        Route::post('/update/{id?}', ['uses' => 'CommentController@update']);
        Route::get('/delete/{id?}', ['uses' => 'CommentController@destroy']);
    });
    // Quản lý banner
    Route::group(['prefix' => 'banners'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'BannerController@index']);
        Route::post('/store', ['uses' => 'BannerController@store']);
        Route::get('/edit/{id?}', ['uses' => 'BannerController@edit']);
        Route::post('/update/{id?}', ['uses' => 'BannerController@update']);
        Route::get('/delete/{id?}', ['uses' => 'BannerController@destroy']);
    });
    // Quản lý người dùng đăng ký
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'CustomerController@index']);
    });
});
