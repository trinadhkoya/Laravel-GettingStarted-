	<?php

	
    // Put all your routes inside here.

	Route::get('/hello','Controller@hello');
	Route::get('/index/{name}','Controller@index');

	Route::get('/welcome',function(){
	return view('welcome');
	});

	Route::get('/', function () {
	return view('index');
	});


	Route::post('/logmein','LoginController@logmein');
		
	Route::get('/login',function(){
			return view('login');
	});

	Route::post('/registeration','SignUpController@letMeSignUp');

	Route::get('/register',function(){
		return view('signup');
	});


	

	?>