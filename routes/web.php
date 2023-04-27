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

Auth::routes();

// Backend
Route::get('cms/login', ['as' => 'login', 'uses' => 'Admin\Auth\LoginController@getLogin']);
Route::post('cms/login', ['uses' => 'Admin\Auth\LoginController@postLogin']);
Route::get('cms/logout', ['as' => 'logout', 'uses' => 'Admin\Auth\LoginController@logout']);
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
Route::group(['middleware' => 'auth', 'prefix' => 'cms'], function () {
    // Trang dashboard
    Route::get('/dashboard', 'Admin\DashboardController@index');
    // Trang quản trị category
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', ['uses' => 'Admin\CategoryController@index']);
        Route::get('/{id?}', ['as' => 'index', 'uses' => 'Admin\CategoryController@index']);
        Route::post('/store', ['uses' => 'Admin\CategoryController@store']);
        Route::get('/show/{id?}', ['as' => 'show', 'uses' => 'Admin\CategoryController@show']);
        Route::get('/edit/{id?}', ['as' => 'edit', 'uses' => 'Admin\CategoryController@edit']);
        Route::post('/update/{id?}', ['as' => 'update', 'uses' => 'Admin\CategoryController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\CategoryController@destroy']);
    });
    // QUẢN TRỊ TAGS
    Route::group(['prefix' => 'tags',], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\TagsController@index']);
        Route::post('/store', ['uses' => 'Admin\TagsController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\TagsController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\TagsController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'Admin\TagsController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\TagsController@destroy']);
        Route::get('/search', ['uses' => 'Admin\TagsController@begin_search']);
        Route::post('/search', ['uses' => 'Admin\TagsController@ajax_search']);
        Route::post('/addtags', ['uses' => 'Admin\TagsController@add_tags']);
    });
    // Quản lý điểm đến
    Route::group(['prefix' => 'locations', 'as' => 'locations'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\LocationController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'Admin\LocationController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'Admin\LocationController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'Admin\LocationController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\LocationController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\LocationController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'Admin\LocationController@destroy']);
    });
    // Quản lý điểm du lịch
    Route::group(['prefix' => 'destinations', 'as' => 'destinations'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\DestinationController@index']);
        Route::get('/create', ['as' => 'create', 'uses' => 'Admin\DestinationController@create']);
        Route::post('/store', ['as' => 'store', 'uses' => 'Admin\DestinationController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'Admin\DestinationController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\DestinationController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\DestinationController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'Admin\DestinationController@destroy']);
    });
    // Trang quản trị các page tĩnh
    Route::group(['prefix' => 'pages', 'as' => 'pages', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PageController@index']);
        Route::get('/create', ['uses' => 'Admin\PageController@create']);
        Route::post('/store', ['uses' => 'Admin\PageController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\PageController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\PageController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\PageController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\PageController@destroy']);
    });
    // Các trang tin tức
    // Route cũ
    Route::group(['prefix' => 'posts', 'as' => 'posts', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PostsController@index']);
        Route::get('/create/{type}', ['as' => 'create', 'uses' => 'Admin\PostsController@create']);
        Route::post('/store/{type}', ['as' => 'store', 'uses' => 'Admin\PostsController@store']);
        Route::get('/show/{id}', ['as' => 'show', 'uses' => 'Admin\PostsController@show']);
        Route::get('/edit/{id}', ['as' => 'edit', 'uses' => 'Admin\PostsController@edit']);
        Route::post('/update/{id}', ['as' => 'update', 'uses' => 'Admin\PostsController@update']);
        Route::get('/delete/{id}', ['as' => 'delete', 'uses' => 'Admin\PostsController@destroy']);
        Route::get('/preview/{id}', ['as' => 'preview', 'uses' => 'Admin\PostsController@preview']);
        Route::get('/search', ['as' => 'search', 'uses' => 'Admin\PostsController@search']);
    });
    // Trang quản trị những câu hỏi thường gặp
    Route::group(['prefix' => 'frequently-questions', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\QuestionController@index']);
        Route::get('/create', ['uses' => 'Admin\QuestionController@create']);
        Route::post('/store', ['uses' => 'Admin\QuestionController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\QuestionController@show']);
        Route::get('/show/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'Admin\QuestionController@show']);
        Route::get('/edit/{id?}', ['uses' => 'QuestionController@edit']);
        Route::get('/edit/{question_id?}/answer/{action?}/{answer_id?}', ['uses' => 'Admin\QuestionController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\QuestionController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\QuestionController@destroy']);
    });
    Route::group(['prefix' => 'frequently-answers', 'as' => 'q&a'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\AnswerController@index']);
        Route::get('/create', ['uses' => 'Admin\AnswerController@create']);
        Route::post('/store', ['uses' => 'Admin\AnswerController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\AnswerController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\AnswerController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\AnswerController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\AnswerController@destroy']);
        Route::get('/index/all', ['uses' => 'Admin\AnswerController@indexAllAnswersToElasticsearch']);
    });
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
    // Trang quản trị role
    Route::group(['prefix' => 'roles', 'as' => 'roles', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\RoleController@index']);
        Route::get('/create', ['uses' => 'Admin\RoleController@create']);
        Route::post('/store', ['uses' => 'Admin\RoleController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\RoleController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\RoleController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\RoleController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\RoleController@destroy']);
    });
    // Trang quản trị user
    Route::group(['prefix' => 'users', 'as' => 'users', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\UserController@index']);
        Route::get('/create', ['uses' => 'Admin\UserController@create']);
        Route::post('/store', ['uses' => 'Admin\UserController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\UserController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\UserController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\UserController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\UserController@destroy']);
    });
    // Cấu hình website
    Route::group(['prefix' => 'setting', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\SettingController@index']);
        Route::post('/allowGetDynamicContent', ['uses' => 'Admin\SettingController@allowGetDynamicContent']);
    });
    // Quản trị thông tin website
    Route::group(['prefix' => 'contact', 'as' => 'settings', 'middleware' => 'auth'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\SettingController@contact']);
        Route::post('/store', ['uses' => 'Admin\SettingController@storeContact']);
    });
    Route::post('/html/update', ['uses' => 'Admin\SettingController@updateHTML']);
    // Tài khoản của tôi
    Route::group(['prefix' => 'account'], function () {
        Route::match(array('GET', 'POST'), '/profile', ['uses' => 'Admin\MyAccountController@profile']);
    });
    // Quản lý đối tác
    Route::group(['prefix' => 'partner'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\PartnersController@index']);
        Route::post('/store', ['uses' => 'Admin\PartnersController@store']);
        Route::get('/show/{id?}', ['uses' => 'Admin\PartnersController@show']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\PartnersController@edit']);
        Route::post('/edit/{id?}', ['uses' => 'Admin\PartnersController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\PartnersController@destroy']);
    });
    // Quản lý comment (Đối tác nói về chúng tôi)
    Route::group(['prefix' => 'comments'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CommentController@index']);
        Route::post('/store', ['uses' => 'Admin\CommentController@store']);
        Route::get('/edit/{id?}', ['uses' => 'Admin\CommentController@edit']);
        Route::post('/update/{id?}', ['uses' => 'Admin\CommentController@update']);
        Route::get('/delete/{id?}', ['uses' => 'Admin\CommentController@destroy']);
    });
    // Quản lý người dùng đăng ký
    Route::group(['prefix' => 'customers'], function () {
        Route::get('/', ['as' => 'index', 'uses' => 'Admin\CustomerController@index']);
    });
});

// Frontend
Route::group(['middleware' => 'web'], function () {
    Route::get('/',  ['uses' => 'HomepageController@index']);
    Route::get('/diem-den', ['uses' => 'LocationController@index']);
    Route::get('/diem-den/{continent}/{country}/{city?}', ['uses' => 'LocationController@detail']);
    Route::get('/diem-den/{continent}/{country}/{city?}/hinh-anh', ['uses' => 'LocationController@detail']);
    Route::get('/diem-den/{continent}/{country}/{city?}/diem-du-lich', ['uses' => 'LocationController@destination']);
    Route::get('/diem-den/{continent}/{country}/{city?}/diem-du-lich/{slug?}', ['uses' => 'LocationController@destination']);
    Route::get('gioi-thieu/{slug?}', ['uses' => 'PageController@detail']);
    Route::get('/bao-mat-thong-tin', ['uses' => 'HomepageController@security']);
    Route::get('/quy-dinh-su-dung', ['uses' => 'HomepageController@rule']);
    Route::get('/blog/viet-bai/note', ['uses' => 'BlogController@note']);
    Route::post('/blog/viet-bai/note', ['uses' => 'BlogController@postNote']);
    Route::get('/photo-blog/dang-bai/note', ['uses' => 'BlogController@photo']);
    Route::get('/cong-tac-vien/viet-bai/note', ['uses' => 'BlogController@collaborator']);
    Route::get('/hoi-dap', function () {
        return view('question.index');
    });
    Route::get('/lich-trinh-du-lich', function () {
        return view('schedule.index');
    });
    Route::get('ban-do-du-lich/viet-nam', function () {
        return view('map.index');
    });
    Route::get('/du-lich/{slug}', ['uses' => 'BlogController@detail']);
    Route::get('/bai-viet/{slug}', ['uses' => 'BlogController@detail']);
    Route::get('/photo/{slug}', ['uses' => 'BlogController@detail']);
    Route::get('/{slug}', ['uses' => 'PageController@detail']);
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
});
