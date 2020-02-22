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

Route::view('/','welcome');

// Route::get('/{user}/{id}', function($u, $id){
//     return "user = $u, id = $id";
// });

Route::get('user/{name?}', function ($name=null) {  
    return $name;  
});
Route::view('/room','room');
Route::view('/testing','testing');


Route::view('/abcd','pages.pre_home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/posts', 'PostsController');

Route::view('pawan', 'dhakalpawan');
