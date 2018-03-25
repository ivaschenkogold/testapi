<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('users')->group(function () {
    Route::get('/', 'UserController@index');
    Route::get('/{id}', 'UserController@show')->where(['id' => '[0-9]+']);

    Route::post('/', 'UserController@store')->name("api.user.store");
});


Route::prefix('tasks')->group(function () {
    Route::get('/', 'TaskController@index');
    Route::get('/{id}', 'TaskController@show')->where(['id' => '[0-9]+']);

    Route::post('/', 'TaskController@store')->name("api.task.store");
});

Route::prefix('projects')->group(function () {
    Route::get('/', 'ProjectController@index');
    Route::get('/{id}', 'ProjectController@show')->where(['id' => '[0-9]+']);

    Route::post('/', 'ProjectController@store')->name("api.project.store");
});