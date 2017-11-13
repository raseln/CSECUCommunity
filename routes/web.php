<?php



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//zahir user control and Profile
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
			
//Israt post
Route::post('/createpost',[
		'uses' =>'PostController@postCreatePost',
		'as' => 'createpost',
		'middleware' => 'auth'
		]);

		Route::post('/editpost/{post_id}',[
			'uses' =>'PostController@postEditPost',
			'as' => 'editpost',
			'middleware' => 'auth'
			]);

			Route::get('/deletepost/{post_id}',[
				'uses' =>'PostController@getDeletePost',
				'as' => 'deletepost',
				'middleware' => 'auth']);

	Route::post('/createcomment',[
		'uses' =>'CommentController@postCreateComment',
		'as' => 'createcomment',
		'middleware' => 'auth'
		]);

		Route::post('/editcomment/{comment_id}',[
			'uses' =>'CommentController@postEditComment',
			'as' => 'editcomment',
			'middleware' => 'auth'
			]);

	Route::get('/deletecomment/{comment_id}',[
		'uses' =>'CommentController@getDeleteComment',
		'as' => 'deletecomment',
		'middleware' => 'auth']);

		Route::post('/createreply',[
			'uses' =>'ReplyController@postCreateReply',
			'as' => 'createreply',
			'middleware' => 'auth'
			]);

			Route::post('/editreply/{reply_id}',[
				'uses' =>'ReplyController@postEditReply',
				'as' => 'editreply',
				'middleware' => 'auth'
				]);

			Route::get('/deletereply/{reply_id}',[
				'uses' =>'ReplyController@getDeleteReply',
				'as' => 'deletereply',
				'middleware' => 'auth']);

	Route::resource('tag', 'TagController');
	Route::get('/post/tag/{tag_id}', 'HomeController@tag')->name('tag');
	
	//Anne chat
Route::get('/chat','ChatController@chat');
Route::post('send','ChatController@send');
Route::post('saveToSession','ChatController@saveToSession');
Route::post('deleteSession','ChatController@deleteSession');
Route::post('getOldMessage','ChatController@getOldMessage');
Route::get('check',function(){
	return session('chat');
});

//Anne search

Route::get('/search',[
		'uses' =>'UserController@executeSearch',
		'as' => 'search',
		'middleware' => 'auth']);

?>







    
