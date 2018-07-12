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





// 肖成路由
//友情链接
Route::controller('/admin/fri','admin\FriController');
//广告路由
Route::controller('/admin/guang','admin\GuangController');
//轮播路由
Route::controller('/admin/lun','admin\LunController');
















// 赵标路由
//用户路由
Route::controller('/admin/houtai/user','admin\UserController');
//禁用用户
Route::controller('/admin/houtai/forbidden','admin\ForbiddenController');
//后台登录
Route::controller('/admin/houtai/login','admin\LoginController');
//后台搜索
Route::controller('/admin/houtai/search','admin\SearchController');
//密码管理
Route::controller('/admin/houtai/repass','admin\RepassController');














































// Dzuo的路由开始
// 登录路由
Route::controller('/sn/login','LoginController');
// 轮播图路由
Route::controller('/admin/sn/lun','hou\LunController');
// Dzuo的路由结束