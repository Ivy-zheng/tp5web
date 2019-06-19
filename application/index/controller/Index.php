<?php
namespace app\index\controller;
use Config;
use think\facade\Env;
use think\facade\Hook;
use app\index\behavior\BehaviorTest;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

 

    public function hello($name = 'ThinkPHP5')
    {
         echo 'start'."<br>";
         // $test = new BehaviorTest();
         // $test->run('hook');

        // 在触发钩子之前，绑定行为到指定钩子
     
        Hook::add('test_2','app\\index\\behavior\\BehaviorTest');

        
         Hook::listen('app_init',['name'=>'app_init_test']);
        // 调用设置了钩子的函数来触发钩子，进行测试
        $this->test_1();
           Hook::add('test_1','app\\index\\behavior\\BehaviorTest');
        $this->test_init();

        // bind('sayHello','app\index\controller\User');
        // app('app\index\controller\User')->index();
        // dump(Config::get('database.demo2.type'));
        // dump(config('app.default_ajax_return'));
        // echo(Env::get('app_path')).'<br/>';
        // echo(Env::get('think_path')).'<br/>';
        // echo(Env::get('config_path')).'<br/>';
        // echo(Env::get('route_path')).'<br/>';
        // echo(Env::get('extend_path')).'<br/>';
        // echo(Env::get('root_path'));
        // return 'hello555,' . $name;
    }

     public function test_1() {
        echo __METHOD__.'<br/>';
        // 设置钩子test_1
        Hook::listen('test_1',['name'=>'test_1']);
    }

    public function  test_init() {
        echo __METHOD__.'<br/>';
        // 设置钩子test_2
        Hook::listen('test_init',['name'=>'test_init']);
    }


    public function error()
    {
        return 'error';
    }
}
