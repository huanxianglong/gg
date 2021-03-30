<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:user']],function(){
  Route::get('index','User\Auth\HomeController')->name('index');
  Route::get('profile','ProfileController@index')->name('profile');
  });

// Authentication Routes...
Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'User\Auth\LoginController@login');
Route::post('logout', 'User\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'User\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'User\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'User\Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'User\Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'User\Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'User\Auth\ResetPasswordController@reset');
