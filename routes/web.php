<?php
//后台
Route::group(['namespace' => 'Admin'], function () {
    Route::resource('/', 'IndexController');
    Route::resource('/users', 'UserController'); //用户
    Route::resource('/admins', 'AdminController');//管理员
    Route::resource('/gift', 'GiftController');//礼物
    Route::get('/get', 'GetController@index');//获取记录
    Route::get('/share', 'ShareController@index');//分享记录
});

