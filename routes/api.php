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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/posts', 'PostController@index');
Route::get('/posts/{id}', 'PostController@show');
Route::post('/posts', 'PostController@store');

Route::get('/products', 'ProductController@index');
<<<<<<< HEAD
<<<<<<< HEAD


=======
>>>>>>> remotes/master/ec2-52-192-45-199.ap-northeast-1.compute.amazonaws.com
=======


>>>>>>> 840219193aa23634a6c2d6f77eaddf73816d29bc
