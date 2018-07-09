<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','qian\ShouController@index');
Route::get('/admin',function () {
	return view('admin.houtai.index');
});

// 赵标路由
//用户路由
Route::controller('/admin/houtai/user','admin\UserController');

// Dzuo的路由开始
// 登录路由
Route::controller('/sn/login','LoginController');
// 轮播图路由
Route::controller('/admin/sn/lun','hou\LunController');
// Dzuo的路由结束
