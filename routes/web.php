<?php

Route::get('/', 'PagesController@root')->name('pages.root');

//与以下9个合并同
//Auth::routes();
//1.Authentication Routes  注册
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//2.Registeration Routes  登录
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
//3.Password Routes 密码操作
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendRequestForm')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


//User的资源路由，等同以下三个
Route::resource('users', 'UsersController', ['only'=>['show', 'update', 'edit']]);
////显示用户个人信息页面
//Route::get('users/{user}', 'UsersController@show')->name('users.show');
////显示编辑个人资料页面
//Route::get('users/{user}/edit', 'UsersController@edit')->name('users.edit');
////处理edit页面提交的更改
//Route::patch('users/{user}', 'UsersController@update')->name('users.update');













Route::resource('topics', 'TopicsController', ['only' => ['index', 'show', 'create', 'store', 'update', 'edit', 'destroy']]);