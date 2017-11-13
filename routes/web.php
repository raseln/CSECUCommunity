<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//rasel user control and Profile
 Route::get('/','UserController@getRegisterPage')->name('welcome');
 Route::post('/signup', ['as' => 'signup', 'uses' => 'UserController@postSignUp']);
 Route::post('/signin', ['as' => 'signin', 'uses' => 'UserController@postSignIn']);
 Route::get('/logout', ['as' => 'logout', 'uses' => 'UserController@getLogout']);
Route::get('/profile/{user_id}',[
		'uses' =>'UserController@getProfile',
		'as' => 'profile',
		'middleware' => 'auth']);

Route::get('/myprofile',[
		   'uses' =>'UserController@getAuthProfile',
		   'as' => 'myprofile',
		   'middleware' => 'auth']);

Route::get('/editprofile',[
		   'uses' =>'UserController@geteditProfile',
		   'as' => 'editprofile',
		   'middleware' => 'auth']);


Route::get('/editpicture',[
		   'uses' =>'UserController@geteditPicture',
		   'as' => 'editprofile',
		   'middleware' => 'auth']);

Route::post('/updateprofile',[
			'uses' =>'UserController@postUpdateProfile',
			'as' => 'updateprofile',
			'middleware' => 'auth'
			]);

Route::post('/updatepicture',[
			'uses' =>'UserController@postUpdatePicture',
			'as' => 'updatepicture',
			'middleware' => 'auth'
			]);

?>







    
