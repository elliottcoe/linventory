<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin', ['middleware' => 'status']);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web','status'], function () {
    Route::auth();
    Route::get('/', [

        'middleware' => 'auth',
        'uses' => 'main@index'
    ]);

    Route::get('/view/{id?}', 'view@viewcomputer',['middleware'=>'status']);
    Route::post('update', 'main@update');
});




