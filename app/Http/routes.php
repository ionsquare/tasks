<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TasksController');
Route::bind('tasks', function($value, $route){
        // This makes tasks use the slug in the url instead of ID
        return App\Task::whereSlug($value)->first();
});

