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

use App\Http\Controllers\RefController;

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('addmaterial','AddmaterialController');

Route::resource('user','UserController');

Route::resource('ref', 'RefController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('search', 'AddmaterialController@search');

Route::post('/user/update', 'UserController@update');

Route::get('menu', 'AddmaterialController@menu');

Route::get('/searchmenu/{id}', 'AddmaterialController@searchmenu');





Route::get('/edituser', function () {
    return view('user.edit');
});

Route::get('/showprofile', function () {
    return view('user.show');
});

Route::get('/refme/{id}','RefController@show');


Route::post('/ref/update/{id}', 'RefController@update');



Route::get('/Addmater/show/{id}','AddmaterialController@show');

Route::get('/Addmater/create/{id}','AddmaterialController@add');

Route::get('/Addmater/delete/{id}','AddmaterialController@destroy');

Route::get('/search_ref/{id}','AddmaterialController@searchref');


Route::get('/search_rw', function () {
    return view('search_rw');
});

Route::get('/search_ref', function () {
    return view('search_ref');
});

Route::get('/view_ref', function () {
    return view('view_ref');
});






