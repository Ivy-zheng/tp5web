<?php

namespace app\index\controller;

use think\Controller;

class Template extends Controller
{
    public function index()
    {
    	// return $this->fetch();
    	// 跨模块输出
    	// return $this->fetch('hello/index');
    	// 跨模板模块
    	// return $this->fetch('testtemplate@test/index');
        // echo env('root_path').'<br/>'; 
        //   echo env('app_path').'<br/>'; 
        // $this->assign('name','hahahhahaphpphph');
        // $this->assign('names',['1111','22222']);
        
        return $this->fetch('index',[
                'title'=>'welcome',
                'names'=>['php','java']
        ]); 
    }

    public function sayHello()
    {
    	echo '88888';
    	return $this->fetch(); 
    }
}
