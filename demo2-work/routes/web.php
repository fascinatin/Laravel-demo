<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return 123;
});


Route::get('/hh', function () {
    return view('welcome');
});

// 主页开始
Route::get('/index','database\testController@index');

// 头部图片开始
Route::get('/photoa','database\testController@photoa');
// 头部图片结束

// 登录开始
Route::get('/loginview','database\testController@loginview');
// 登录验证
Route::post('/logincheck','database\testController@logincheck')->name('logincheck');
// 登录结束


// 注册开始
Route::post('/register','database\testController@register')->name('register');

// 注册结束


// 删除session开始
Route::get('/shanchu','database\testController@shanchu');
// 删除session结束



// 评论开始
Route::get('/pinglun','database\testController@pinglun');
// 评论结束

// 详情页开始
Route::get('/xiangqing','database\testController@xiangqing');

// 详情页结束

//购物车开始
Route::get('/gouwucar','database\testController@gouwucar');
// 购物车结束

//美妆馆开始
Route::get('/meizhuan','database\testController@meizhuan');
// 美妆馆结束














// 主页结束


// 管理员开始
Route::get('/admin','database\testController@admin');
Route::post('/admincheck','database\testController@admincheck')->name('admincheck');;

// 管理员结束





// 后台管理开始
Route::get('/houtai','database\testController@houtai');

Route::get('/tree','database\testController@tree');

Route::get('/htmain','database\testController@htmain');

// 商品更新开始
Route::get('/shopupdate','database\testController@shopupdate');

Route::get('/shopupdateview','database\testController@shopupdateview');

Route::post('/shopupdateview2','database\testController@shopupdateview2');
// 商品更新结束

// 商品删除开始
Route::get('/deleteshop','database\testController@deleteshop');
// 商品删除结束

// 商品插入开始
Route::get('/insertshop','database\testController@insertshop');
Route::post('/insertshop1','database\testController@insertshop1');
// 商品插入结束



// 后台管理结束

// 账号更新开始
Route::get('/update','database\testController@update');
Route::get('/showtable','database\testController@showtable');
Route::post('/updatetable','database\testController@updatetable');

Route::get('/showtable1','database\testController@showtable1');
Route::post('/updatetable1','database\testController@updatetable1');
// 账号更新结束


// 账号插入开始
Route::get('/insert','database\testController@insert');
Route::post('/insertable','database\testController@insertable');

Route::get('/admininsert','database\testController@admininsert');
Route::post('/adinsertable','database\testController@adinsertable');

// 账号插入结束


// 账号删除开始
Route::get('/delete','database\testController@delete');
Route::get('/delete1','database\testController@delete1');
// 账号删除结束




// tab切换开始
Route::get('/tabqie','database\testController@tabqie');
// tab切换结束






// 添加购物车开始
Route::get('/cartce','database\testController@cartce');
Route::get('/cart','database\testController@cart');



// 添加购物车结束



// 我的收藏开始
Route::post('/shoucang','database\testController@shoucang');
Route::get('/shoucangyemian','database\testController@shoucangyemian');
// Route::post('/shoucang1','database\testController@shoucang1');
// 我的收藏结束

// 取消收藏开始

Route::get('/cancelshoucang','database\testController@cancelshoucang');
// 取消收藏结束
















