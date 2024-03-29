<?php
namespace app\index\controller;

use think\Request;

class Error 
{
    public function index(Request $request)
    {
        //根据当前控制器名来判断要执行那个城市的操作
        $cityName = $request->controller();//获取参数
        return $this->demo031201($cityName);//
    }
    
    //注意 city方法 本身是 protected 方法
    protected function demo031201($name)
    {
        //和$name这个城市相关的处理
         return '当前城市' . $name;
    }
}