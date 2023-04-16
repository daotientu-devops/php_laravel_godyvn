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

Route::group(['middleware' => 'web'], function () {
    Route::get('/gioi-thieu', function () {
        return view('homepage.about');
    });
    Route::get('/lien-he', function () {
        return view('homepage.contact');
    });
    Route::get('/bao-mat-thong-tin', function () {
        return view('homepage.security');
    });
    Route::get('/quy-dinh-su-dung', function () {
        return view('homepage.rule');
    });
    Route::get('/', function () {
        return view('homepage.index');
    });
    Route::get('/blog/viet-bai/note', function () {
        return view('blog.note');
    });
    Route::post('/blog/viet-bai/note', ['uses' => 'BlogController@note']);
    Route::get('/photo-blog/dang-bai/note', function () {
        return view('blog.photo');
    });
    Route::get('/hoi-dap', function () {
        return view('question.index');
    });
    Route::get('/lich-trinh-du-lich', function () {
        return view('schedule.index');
    });
    Route::get('/cong-tac-vien/viet-bai/note', function () {
        return view('blog.collaborator');
    });
    Route::get('/diem-den', function () {
        return view('destination.index');
    });
    Route::get('ban-do-du-lich/viet-nam', function () {
        return view('map.index');
    });
    Route::get('/du-lich/{slug}', ['uses' => 'BlogController@detail']);
    Route::get('/bai-viet/{slug}', ['uses' => 'BlogController@detail']);
    Route::get('/photo/{slug}', ['uses' => 'BlogController@detail']);
    // Đường dẫn allow upload ảnh từ trong ckeditor
    Route::post('ckeditor/image_upload', 'CKEditorController@upload')->name('upload');
});


Auth::routes();

Route::get('/home', 'HomeController@index');
