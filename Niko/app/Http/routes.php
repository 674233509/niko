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













// 赵标路由
//用户路由
Route::controller('/admin/houtai/user','admin\UserController');





















































// Dzuo的路由开始
// 登录路由
Route::controller('/sn/login','LoginController');
// 轮播图路由
Route::controller('/admin/sn/lun','hou\LunController');
// 文章路由
Route::controller('/admin/sn/wen','hou\WenController');
// 标签管理
Route::controller('/admin/sn/biao','hou\BiaoController');
// 文章显示界面
Route::controller('/sn/wen','qian\WenController');
// 后台相册界面
Route::controller('/admin/sn/xiang','hou\XiangController');
// 前台相册展示界面
Route::controller('/sn/pic','qian\PicController');
// 经典语录后台添加
Route::controller('/admin/sn/yulu','hou\YuluController');
// 后台欣赏
Route::controller('/admin/sn/xin','hou\XinController');
// Dzuo的路由结束