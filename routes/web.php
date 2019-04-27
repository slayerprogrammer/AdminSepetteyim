<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes Start
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeController@index')->name('index');

Route::get('/contact','ContactController@index')->name('contact.get');
Route::post('/contact','ContactController@store')->name('contact.post');

Route::get('/about', 'AboutController@index')->name('index');

Route::get('/gold', function () {
    return view('layouts.frontend.gold.index');
});
Route::get('/diamond', function () {
    return view('layouts.frontend.diamond.index');
});
Route::get('/diamond-cutter', function () {
    return view('layouts.frontend.diamond-cutter.index');
});


/*
|--------------------------------------------------------------------------
| Frontend Routes End
|--------------------------------------------------------------------------
*/

/* Admin Route*/
Auth::routes();


/*
|--------------------------------------------------------------------------
| Admin Routes Start
|--------------------------------------------------------------------------
*/
Route::group(['as'=>'admin.','prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth','admin']], function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::resource('setting','SettingController');
    Route::resource('contact', 'ContactController');
    Route::resource('category','CategoryController');
    Route::resource('slider','SliderController');
});


Route::group(['as'=>'author.','prefix'=>'author', 'namespace'=>'Author', 'middleware'=>['auth','author']], function (){
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
});
/*
|--------------------------------------------------------------------------
| Admin Routes End
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Logo Routes Start
|--------------------------------------------------------------------------
*/

Route::get('storage/logo/{filename}', function ($filename)
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

/*
|--------------------------------------------------------------------------
| Logo Routes End
|--------------------------------------------------------------------------
*/
Route::get('storage/slider/{filename}', function ($filename)
{

    $path = storage_path('app/public/slider/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});
