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


Route::get('entry/postuser', 'EntryController@postuser');



Route::get('entry', 'EntryController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('helloworld', function () {
    return view('helloworld');
});


Route::get('user1/{id?}', function ($id = 0) {
    return 'User id: ' . $id;
});

Route::get('user2/{id?}', function ($id = null) {
    return 'User2 id: ' . $id;
});

Route::get('user3/{id}/class/{class}', function ($id, $class) {
    return 'User2 id: ' .$id. 'class:' .$class;
});
Route::resource('user','UserController');

//userController = controller
//show = action
Route::get('entry/popular','UserController@popular');

Route::resource('entry','EntryController');

Route::get('xxx','xxx@show');

Route::resource('home','HomeController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
