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
    return view('home');
});


Route::post('/contactUs', 'ControllerContactUs@ship')->name('contactUs');

/*** BUY **/
Route::get('/before_buy', function () {return view('before_buy');})->name('before_buy');


Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'flat') {
    return $captcha->src($config);
});

Route::get('/json', 'json@index');