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
Route::group(['middleware'=>'auth','namespace'=>'MtnSyriatel'],function(){
Route::get('/services', 'ViewController@services')->name('services');
Route::get('/mtnsyrtemp', 'ViewController@mtnsyrtemp')->name('mtnsyrtemp');

Route::get('/mtnsyrtemp', 'prepricecontroller@dropDownShow')->name('mtnsyrtemp');
Route::post('/preprice', 'preprice_fillcontroller@store');
Route::post('/postprice', 'postprice_fillcontroller@store');

Route::get('/mtnsyrtemp', 'mtnpreprice_controller@dropDownShow')->name('mtnsyrtemp');
Route::post('/mtnpreprice', 'mtnprepricefill_controller@store');
Route::post('/mtnpostprice', 'mtnpostpricefill_controller@store');
});

