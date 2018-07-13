<?php

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

Route::get('/', function () {
		return view('welcome');
	});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/suc-manh-so/{post}', function ($post) {
		echo "suc-manh-so = ".$post;
	});

Route::get('/username/{username}/password/{password}', function ($username, $password) {
		echo $username."-".$password;
	});

Route::any('/username1/{username}/password1/{password}', function ($username, $password) {
		echo $username."-".$password;
	});

Route::get('/inputForm', function () {
		return view('input_form');
	});

Route::get('/showPost', 'PostController@showPost');

Route::post('/postForm', [
		'as'   => 'postForm',
		'uses' => 'PostController@postForm'
	]);

Route::get('/post/{post_name}', 'PostController@viewPost');

// Route::get('/product/listproduct', function () {
// 		return view('product');
// 	});
// Route::get('/product/addproduct', function () {
// 		return view('product');
// 	});
// Route::get('/product/editproduct', function () {
// 		return view('product');
// 	});

Route::group(['prefix' => "product"], function () {
		Route::get('/listproduct', function () {
				return view('product');
			});
		Route::get('/addproduct', function () {
				return view('product');
			});
		Route::get('/editproduct', function () {
				return view('product');
			});
	});

Route::get('/category', function () {
		return view('category');
	});

Route::get('/test/{value}', 'CategoryController@test');

Route::post('/postCategory', [
		'as'   => 'postCategory',
		'uses' => 'CategoryController@postCategory'
	]);