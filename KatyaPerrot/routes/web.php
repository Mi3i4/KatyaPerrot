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


Route::get('/get_captcha/{config?}', function (\Mews\Captcha\Captcha $captcha, $config = 'flat') {
    return $captcha->src($config);
});
/*** BUY
Route::get('/before_buy', function () {return view('before_buy');})->name('before_buy');

Route::post('/register_buy', 'Auth\RegisterController@validator')->name('register_buy');

Route::post('/login', 'Auth\LoginController@login')->name('login');

Route::get('/login_form', function () { return view('auth.login'); })->name('login_form');

Route::post('/receive', 'ControllerBuy@yandexReceive')->name('receive');

Route::get('/buy', 'ControllerBuy@buy')->name('buy');


    $router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail');
    $router->post('password/reset', 'ResetPasswordController@reset');
    
Route::get('/json', 'json@index');

Route::get('/home', 'HomeController@index')->name('home');*/

/**********************************************************************/



