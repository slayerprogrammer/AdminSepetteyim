<?php

Route::group(["prefix"=>"admin", "as"=>"backend", "namespace" => "Backend", 'middleware'=>['auth','admin']], function (){
    Route::group(["prefix"=>"settings", "as"=>".settings", "namespace" => "Settings"], function (){
        Route::get("/", "SettingsController@show")->name(".show");
        Route::post("/update", "SettingsController@update")->name(".update");
        Route::post("/create", "SettingsController@create")->name(".create");
        Route::post("/delete", "SettingsController@delete")->name(".delete");

    });
});

Route::group(["prefix"=>"admin", "as"=>"backend", "namespace" => "Backend"], function () {
    Route::get("/", "AdminController@index")->name(".dashboard");
});