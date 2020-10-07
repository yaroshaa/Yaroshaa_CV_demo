<?php

use Illuminate\Support\Facades\File;

Route::get('/{key?}', ['as'=>'/', 'uses'=>'HomeController@index'])->middleware('checkIssetParam');
Route::get('/{key?}', ['as'=>'home', 'uses'=>'HomeController@index'])->middleware('checkIssetParam');
Route::post('/{key?}/contact', ['as'=>'home.contact', 'uses'=>'ContactController@send']);

//Vue
Route::name('vue')->group( function () {
    Route::get('/vue/{any}',  function ()  {
        return File::get(public_path() . '/vue/index.html');
    })->where('any','.*');
});

// Angular
Route::name('angular')->group( function () {
    Route::get('/angular/{route:.*}',  function ()  {
        return File::get(public_path() . '/angular/index.html');
    });
});

// React
Route::name('react')->group( function () {
    Route::get('/react/{route:.*}', function ()  {
        return File::get(public_path() . '/react/index.html');
    });
});


// ADMIN
//Route::group(['namespace' => 'Admin' ,  'middleware' => 'checkAdmin'], function(){
//    Route::get('admin', [ 'as'=>'admin', 'uses' => 'AdminController@index']);
//});


