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

Route::get('/newLogin', function () {
    return view('customAuth.newLogin');
});

Route::get('/newRegister', function () {
    return view('customAuth.newRegister');
});

Route::get('/newForgotPwd', function () {
    return view('customAuth.newForgotPwd');
});

//simple route
Route::get('/', function () {
    return view('welcome');
});

// Simple route define with return view:
Route::get('/users/{id}', function ($id) {
    return 'The is' . $id;
});

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'The is' . $id . 'and name is' . $name .'';
});

Route::get('/posts', array('as' => 'anyName', function () {
    $url = route('anyName');
    return $url;
}));

//Route::resource('/book', 'BookController');

Route::get('/book/{id}/{name}', 'BookController@contact');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');