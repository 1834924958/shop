<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('shujv', 'home\IndexController');
// 前台的首页
Route::get("/qian","home\IndexController@index");

Route::get("/denglu","home\IndexController@denglu");

Route::post("/home/login","home\IndexController@doLogin");//登录的表单;

//用户信息
Route::get("/xinxi","home\IndexController@xinxi");






//用户头像的修改;
Route::resource("/home","home\ImagesController");
//用户密码的修改;
Route::resource("/mima","home\MimaController");
// 进入前台的地址首页;
 Route::get("/site","home\AddressController@index");
 // 添加用户的地址的页面
 Route::get("/diz","home\AddressController@create");
 Route::resource("/address","home\AddressController");
 // 显示出省市的信息
 Route::get("/addressx/{upid}","home\AddressController@find");
//设置路由组;
Route::group(["prefix"=>"/lala","middlewaree"=>"myauth"],function(){
//退出前台管理系统;
//进行加载登录前台的首页;
Route::get("index",function(){
	return view('home.index');
	});
Route::get("logout","home\IndexController@logout");
 });

Route::get("/home/create","home\IndexController@create");
Route::post("/stor","home\IndexController@stor");
Route::get('/img/delegate',function(){
	return view('delegate');
});
Route::resource('shuj', 'home\PlateController');




//xxxx
//hello

//进入后台的登录

Route::get('/admin/login',"Admin\LoginController@index");
// Route::post('/admin/login',"Admin\LoginController@doLogin");
Route::post("/admin/login","Admin\LoginController@doLogin");//登录的表单;
Route::get('/tianjia',"Admin\UserController@create");
Route::get('/xianshi',"Admin\UserController@index");
//显示轮播的管理
Route::get('/lunbo',"Admin\ImagesController@index");
//显示轮播图片的添加
Route::get("/lb","Admin\ImagesController@create");
// Route::post("/lb","Admin\ImagesController@upload");
// 后台的友情链接;

Route::get('/yq',"Admin\BlogrollController@index");
//创建友情链接
Route::get('/youq',"Admin\BlogrollController@create");


// 网站开关;
Route::get("/pz","Admin\PeizController@index");

//设置路由组;
Route::group(["prefix"=>"/admin","middleware"=>"myauth"],function(){
//退出后台管理系统;
Route::get("logout","Admin\LoginController@logout");
//进行加载登录后台的首页;
Route::get("index",function(){
	return view('admin.index');
	});
// 后台用户的管理
Route::resource("user","Admin\UserController");
//进行加载图片轮播的效果;
Route::resource("images","Admin\ImagesController");
//友情链接的管理
Route::resource("blogroll","Admin\BlogrollController");
//网站配置开关的管理;
Route::resource("config","Admin\PeizController");
});



Route::post("/status","Admin\UserController@status");

//板块
Route::get('/navigation',"Admin\plateController@navigation");
Route::resource("plate","Admin\plateController");

Route::get('/platee',"Admin\PlateController@index");

//子版块
Route::resource("zizi","Admin\PlatesController");
Route::get('/childPlate',"Admin\PlatesController@index");
Route::get('/tjz',"Admin\PlatesController@navigation");
