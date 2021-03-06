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
Route::get('/admin','hou\AdminShouController@index');





// 小成路由
//友情链接
Route::controller('/admin/fri','admin\FriController');
//广告路由
Route::controller('/admin/guang','admin\GuangController');
//轮播路由
// Route::controller('/admin/lun','admin\LunController');
//配置路由
Route::controller('/admin/sn/peizhi','hou\PeizhiController');
//评论路由
Route::controller('/admin/sn/ping','hou\PingController');
//回收站
Route::controller('/admin/sn/hui','hou\HuiController');
//音乐
Route::controller('/admin/sn/yin','hou\YinController');
//关于我
Route::controller('/admin/sn/about','hou\AboutController');

//前台评论
Route::controller('/qian/sn/ping','qian\PingController');

//前台音乐
Route::controller('/qian/sn/yin','qian\YinController');
//前台关于
Route::controller('/qian/sn/about','qian\AboutController');
















// 赵标路由
//后台登录
Route::controller('/admin/houtai/login','admin\LoginController');
//路由组用户不登录不能访问
Route::group(['middleware'=>"user"],function(){
//用户路由
Route::controller('/admin/houtai/user','admin\UserController');
//禁用用户
Route::controller('/admin/houtai/forbidden','admin\ForbiddenController');
//后台搜索
Route::controller('/admin/houtai/search','admin\SearchController');
//密码管理
Route::controller('/admin/houtai/repass','admin\RepassController');
//404 搜索未找到
Route::get('/errors',function () {
	return view('admin.houtai.errors.404');
});
//后台首页
Route::controller('/admin/houtai/shouye','admin\ShouyeController');
//后台日程
Route::controller('/admin/houtai/richeng','admin\RichengController');
//后台锁屏
Route::controller('/admin/houtai/suoping','admin\LockController');
//后台个人简介
Route::controller('/admin/houtai/jianjie','admin\JianjieController');
//后台个人简历
Route::controller('/admin/houtai/gerenjianli','admin\GerenjianliController');
});












































// Dzuo的路由开始
// 登录路由
Route::controller('/sn/login','LoginController');
// 轮播图路由
Route::controller('/admin/sn/lun','hou\LunController');
// 文章路由
Route::controller('/admin/sn/wen','hou\WenController');
// 标签管理
Route::controller('/admin/sn/biao','hou\BiaoController');

// 后台相册界面
Route::controller('/admin/sn/xiang','hou\XiangController');

// 经典语录后台添加
Route::controller('/admin/sn/yulu','hou\YuluController');
// 后台欣赏
Route::controller('/admin/sn/xin','hou\XinController');

// 前台注册
Route::controller('/sn/zhu','qian\ZhuController');
Route::group(['middleware'=>"denglu"],function(){
	// 前台相册展示界面
	Route::controller('/sn/pic','qian\PicController');
	// 文章显示界面
	Route::controller('/sn/wen','qian\WenController');
	// 前台搜索
	Route::controller('/sn/sou','qian\WenController');
	// 留言板
	Route::controller('/sn/liu','qian\liuController');
});	
Route::controller('/admin/sn/liu','qian\liuController');
// 前台展示
Route::controller('/sn/show','qian\ShowController');
// Dzuo的路由结束