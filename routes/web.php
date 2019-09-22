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
    return view('welcome');
});

Route::get("/create_account", 'UserController@accountCreate');
Route::post("/register", 'UserController@accountStore');
Route::get("/Ngo_register", 'clintController@NgoaccountStore');
Route::get("/dashboard", 'UserController@dashboardShow');
Route::get("/verify_email/{verification_string}", 'UserController@emailVerify');
Route::get("/forgot_password", 'UserController@passwordForgot');
Route::post("/forgot_password_verify_email", 'UserController@sendVerificationEmail');
Route::get("/reset_password/{verification_string}", 'UserController@passwordReset');
Route::post("/passwordReset", 'UserController@passwordUpdate');


