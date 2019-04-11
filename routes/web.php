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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('setting','SettingController');
});

Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth','author']], function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
});

Route::get('storage/{filename}', function ($filename)
{

    $path = storage_path('app/public/logo/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});