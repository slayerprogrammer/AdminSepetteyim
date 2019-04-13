<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes Start
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('layouts.frontend.home.index');
});
Route::get('/about', function () {
   return view('layouts.frontend.about.index');
});
Route::get('/gold', function () {
    return view('layouts.frontend.gold.index');
});
Route::get('/diamond', function () {
    return view('layouts.frontend.diamond.index');
});
Route::get('/diamond-cutter', function () {
    return view('layouts.frontend.diamond-cutter.index');
});
Route::get('/contact', function () {
    return view('layouts.frontend.contact.index');
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

/*
|--------------------------------------------------------------------------
| Logo Routes End
|--------------------------------------------------------------------------
*/
