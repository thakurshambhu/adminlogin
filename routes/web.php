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
    return redirect('/admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){
    

    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/login','Admin\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Admin\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','Admin\AdminLoginController@logout')->name('admin.logout');
    Route::post('/password/email','Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset','Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset','Admin\AdminResetPasswordController@reset')->name('admin.password.update');
    Route::get('/password/reset/{token}','Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::get('/forgotpassword',function(){
        return view('admin.forgotpassword');
  });
    Route::match(['get','post'],'/profile/{id}','Admin\DashboardController@profileUpdtae');
  

    Route::get('/check-pwd','Admin\PasswordResetController@checkpassword')->name('admin.password');
   
    Route::match(['get','post'],'/update-pwd','Admin\PasswordResetController@updatePassword');


    Route::match(['get','post'],'All_users-{id}','Admin\UsersManagment@index');
    Route::get('show_users-{id}','Admin\UsersManagment@edit');
    Route::any('delete_user-{id}','Admin\UsersManagment@destroy');
    Route::post('update/{id}','Admin\UsersManagment@update');


  });

