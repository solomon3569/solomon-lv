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
    return view('solomon');
});

Route::get('/posts', function(){
	return view('post');
});

Route::get('/posts/{id}', function($id){
	return view('post-single',[
		'id' => $id
	]);
});


Auth::routes();



Route::get('/home', 'HomeController@index');

Route::get('/user', 'UserController@index');
Route::get('/user/delete/{id}', 'UserController@destroy');
Route::post('/user', 'UserController@store');


Route::get('/products', 'ProductController@list');
Route::get('/products/add_cart/{id}', 'ProductController@add_cart');
Route::get('/products/list_cart', 'ProductController@list_cart');
Route::get('/cart', 'ProductController@cart');
Route::get('/products/det_cart/{id}', 'ProductController@det_list');

Route::get('/chat', 'ChatController@index');
Route::get('/chat/all', 'ChatController@all');
Route::post('/chat', 'ChatController@create');

Route::get('/solomon', 'SolomonController@index');



Route::pattern('student_no', 's[0-9]{10}');

Route::group(['prefix'=>'student'],function(){
	Route::get('/', 'StudentController@index');

	Route::get('{student_no}',[
		'as'=>'student',
		'uses'=>'StudentController@getStudentData'
	]);

	Route::get('{student_no}/score/{subject?}',[
		'as'=>'student.score',
		'uses'=>'StudentController@getStudentScore'
	])->where(['subject'=>'(chinese|english|math)']);

});

Route::group(['namespace'=>'Cool'],function(){

	Route::get('cool', 'TestController@index');
});

Route::get('edit/{student_no}','SchoolController@getEdit');
Route::get('edit/{student_no}','SchoolController@postEdit');
