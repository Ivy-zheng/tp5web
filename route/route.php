<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// 
// // 
// Route::get('hello/say/:name','Hello/say');

// Route::get('hello/:name', function ($name) {
//     return 'Hello,' . $name . '!';
// });
// 
use think\facade\Route;

// Route::rule('test11','index/redis/index','post|get');
Route::get('demo/:id','Demo/index')->cache(3600);
Route::rule('test22/:name','index/redis/index')->name('testroute');
Route::rest('create',['GET', '/add','add']);
Route::get('cache/:name','index/Demo031201/index')->middleware('Check');


//资源路由
//Route::resource('blog','index/Blog')->ext('htm')->pattern(['id' => '\d+']);

// // 定义博客查看页面的路由规则
// Route::get('blog/:id$', 'index/Blog/read')
//     ->ext('htm')
//     ->pattern('id', '\d+');

Route::get('redis', 'index/Redis/index');
// Route::put('blog/:id$', 'index/Blog/update');
// Route::miss(function(){
// 	return '404';
// });
// Route::miss('index/Info/param');
Route::get('template', 'index/Template/index');


Route::get('/', function () {
    return 'Hello,ThinkPHP!';
});

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

return [

];




