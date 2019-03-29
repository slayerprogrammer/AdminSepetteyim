<?php

Route::group(["prefix"=>"admin", "as"=>"backend", "namespace" => "Backend"], function (){
    Route::group(["prefix"=>"settings", "as"=>".settings", "namespace" => "Settings"], function (){
        Route::get("/", "SettingsController@show")->name(".show");
        Route::post("/update", "SettingsController@update")->name(".update");
        Route::post("/create", "SettingsController@create")->name(".create");
        Route::post("/delete", "SettingsController@delete")->name(".delete");

    });
});