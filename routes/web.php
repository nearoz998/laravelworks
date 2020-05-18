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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hello', function () {  
//     return redirect('/');  
// });

//Route::redirect('hello','/');

// Route::get('/{user}/{id}', function($u, $id){
//     return "user = $u, id = $id";
// });

// Route::get('user/{name?}', function ($name=null) {  
//     return $name;  
// });
Route::view('/room','room')->middleware('auth');
Route::view('/testing','testing');

Auth::routes();
Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::resource('/posts', 'PostsController')->middleware('auth');

Route::view('dhakalpawan', 'dhakalpawan')->middleware('auth');

Route::resource('/form1', 'form1Controller')->middleware('auth');

Route::view('/dashboard', 'admin.dashboard')->middleware('auth');

Route::view('/', 'welcome');
