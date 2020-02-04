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
    return view('website.index');
});

Route::prefix('/order')->name('order')->group(function(){
    Route::get('/add', 'OrderViewController@add')->name('.add');
    Route::post('/add', 'OrderViewController@save')->name('.add.save');
    Route::get('/verify', 'OrderViewController@verify')->name('.verify');
    Route::post('/verify', 'OrderViewController@verifyVal')->name('.verify.val');
    Route::get('/valide', 'OrderViewController@valide')->name('.valide');
    Route::get('/payment/{id}', 'OrderViewController@payment')->name('.payment');
    Route::post('/payment/{id}', 'OrderViewController@paymentAdd')->name('.payment.add');
});

Route::prefix('/admin')->name('admin')->group(function(){
    Route::get('/colour', 'AdminOrderController@colour')->name('.colour');
    Route::get('/colour/{id}/delete', 'AdminOrderController@deleteColour')->name('.colour.delete');
    Route::post('/colour', 'AdminOrderController@addColour')->name('.addcolour');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
