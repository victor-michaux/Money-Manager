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
    return view('home');
})->middleware('guest');

Route::get('/features', function () {
    return view('features');
})->middleware('guest');

Route::group(['middleware' => 'auth', 'namespace' => 'Web', 'prefix'  =>  'operations'], function() {
   Route::get('/', 'OperationController@dashboard')->name('dashboard');
   Route::get('/create', 'OperationController@create')->name('create-operation');
});

Route::get('/email_validation', 'Web\EmailConfirmationTokenController@check')->name('email_token_validation');

Route::get('/stats', 'Web\StatsController@dashboard')->name('stats')->middleware('auth');

Route::get('/categories', 'API\OperationController@amountPerCategory')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
