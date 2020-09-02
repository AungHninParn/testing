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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','ArticleController@index');

Route::get('/articles','ArticleController@index');

Route::get('/articles/detail/{id}','ArticleController@detail');

Route::get('/articles/add','ArticleController@add');

Route::post('/articles/add','ArticleController@create');

Route::get('/articles/delete/{id}','ArticleController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user',function(){
	//factory(\App\User::class,3)->create();
	// \App\Address::create([
	// 	'user_id'=>1,
	// 	'country'=>'Myanmar'
	// ]);
	// \App\Address::create([
	// 	'user_id'=>2,
	// 	'country'=>'USA'
	// ]);
	// \App\Address::create([
	// 	'user_id'=>3,
	// 	'country'=>'UK'
	// ]);

	$users=\App\User::all();
	return view('users.index',compact('users'));
});
