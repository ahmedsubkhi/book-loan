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
use App\Http\Middleware\Otentikasi;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@actregister');


Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@actlogin');


Route::get('/logout', 'LogoutController@logout');


Route::middleware(Otentikasi::class)->group(function () {

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/book', 'BookController@index')->name('book');
    Route::get('/book/create', 'BookController@create')->name('bookcreate');
    Route::post('/book', 'BookController@store');
    Route::get('/book/edit/{id_book}', 'BookController@edit');
    Route::put('/book/update/{id_book}', 'BookController@update');
    Route::delete('/book/destroy/{id_book}', 'BookController@destroy');

    Route::get('/member', 'MemberController@index')->name('member');
    Route::get('/member/create', 'MemberController@create')->name('membercreate');
    Route::post('/member', 'MemberController@store');
    Route::get('/member/edit/{id_member}', 'MemberController@edit');
    Route::put('/member/update/{id_member}', 'MemberController@update');
    Route::delete('/member/destroy/{id_member}', 'MemberController@destroy');

});
