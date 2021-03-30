<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:admin']],function(){
  Route::get('index',function(){
    return view('admin.auth.home');
  });
});

// Authentication Routes...
Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Admin\Auth\LoginController@login');
Route::post('logout', 'Admin\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Admin\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Admin\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Admin\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Admin\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Admin\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Admin\Auth\ResetPasswordController@reset');
