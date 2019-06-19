<?php

namespace app\controller;

use think\Controller;
use think\Request;
use think\facade\Env;
use app\facade\Test;
use think\Facade;

/**
 * 单一模块测试 
 * app.config中的 
 * app_multi_module => false,设置为false
 */
class Demo extends Controller
{
	public function index($id)
	{
		echo $id;exit;
		dump($this->request->header('user-agent'));
		echo $this->request->Ext();exit;
		Facade::bind('app\facade\Test','app\common\Test');
		// echo Test::hello('bind');exit;
		dump(\app\facade\Test::hello('newfacade'));exit;
		// $test = new \app\common\Test();
		// dump($test->hello('thinkphp!'));exit;
		// dump(app('cache'));exit;
		// $cache = app('config');
		// dump($cache['default_timezone']);exit;
		dump(app()->blog->search());exit;

		// 获取应用目录（不区分大小写）
		echo Env::get('app_path').'<br/>';
		// 或者
		echo Env::get('root_path').'<br/>';
		return 'hello';
	}
}