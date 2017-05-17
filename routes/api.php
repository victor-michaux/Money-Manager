<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'RegisterController@register');

Route::group(['prefix'  =>  'operations'], function () {
    Route::get('/', 'API\OperationController@index')->middleware('auth:api');
    Route::post('/', 'API\OperationController@store')->middleware('auth:api');
});

Route::group(['prefix'  =>  'categories', 'namespace'   =>  'API'], function() {
   Route::get('/', 'CategoryController@index')->middleware('auth:api');
});
