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
    return view('/solomon');
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
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 840219193aa23634a6c2d6f77eaddf73816d29bc
Route::delete('/products/det_cart/{id}', 'ProductController@det_list');



<<<<<<< HEAD

Route::get('/chat', 'ChatController@index');
Route::get('/chat/all', 'ChatController@all');
Route::post('/chat', 'ChatController@create');

Route::get('/solomon', 'SolomonController@index');

=======
Route::get('/products/det_cart/{id}', 'ProductController@det_cart');

Route::get('/chat', 'ChatController@index');
Route::get('/chat/all', 'ChatController@all');
Route::post('chat', 'ChatController@create');
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
=======

Route::get('/chat', 'ChatController@index');
Route::get('/chat/all', 'ChatController@all');
Route::post('/chat', 'ChatController@create');

Route::get('/solomon', 'SolomonController@index');

>>>>>>> 840219193aa23634a6c2d6f77eaddf73816d29bc
