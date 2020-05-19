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

Route::group(['prefix' => 'task'], function () {

    Route::get('index', [
        'uses' => 'TaskController@getIndex',
        'as' => 'task.index'
    ]);

    Route::get('create', [
        'uses' => 'TaskController@getCreateTask',
        'as' => 'task.create'
    ]);

    Route::post('create', [
        'uses' => 'TaskController@createTask',
        'as' => 'task.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'TaskController@getEditTask',
        'as' => 'task.edit'
    ]);

    Route::post('update', [
        'uses' => 'TaskController@editTask',
        'as' => 'task.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'TaskController@deleteTask',
        'as' => 'task.delete'
    ]);
});

Route::group(['prefix' => 'status'], function () {

    Route::get('index', [
        'uses' => 'StatusController@getIndex',
        'as' => 'status.index'
    ]);

    Route::get('create', [
        'uses' => 'StatusController@getCreateStatus',
        'as' => 'status.create'
    ]);

    Route::post('create', [
        'uses' => 'StatusController@createStatus',
        'as' => 'status.create'
    ]);

    Route::get('edit/{id}', [
        'uses' => 'StatusController@getEditStatus',
        'as' => 'status.edit'
    ]);

    Route::post('update', [
        'uses' => 'StatusController@editStatus',
        'as' => 'status.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'StatusController@deleteStatus',
        'as' => 'status.delete'
    ]);
});


