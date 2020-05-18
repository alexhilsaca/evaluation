<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'task'], function() {

    Route::get('index', [
        'uses' => 'TaskController@getIndex',
        'as' => 'task.index'
    ]);

    Route::get('create',[
        'uses' => 'TaskController@getCreateTask',
        'as' => 'task.create'
    ]);

    Route::post('create', [
        'uses' => 'TaskController@createTask',
        'as' => 'task.create'
    ]);
});


