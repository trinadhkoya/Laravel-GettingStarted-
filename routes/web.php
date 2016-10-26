<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//i defined a ruote with localhost:8080/welcome
Route::get('/welcome',function(){

	return view('welcome');
});

//creating another route which passes through controller
//when browser hits with given url like localhost:8080/hello.Request travells through Controller and find the method hello in that controller.Then process the corresponding view

Route::get('/hello','Controller@hello');
Route::get('/index/{name}','Controller@index');