<?php

namespace app\index\controller;

use think\Controller;

class Hello extends Controller
{

	// if(file_exists("match.html") && (time()-filemtime("match.html"))<300)
	// {
	//     //如果存在对应的静态文件，则直接访问
	//     require_once("match.html");
	// }else{
	//     //这里用数组来仿真数据库操作，现实一般都是操作数据库得到对应数据
	//     $student = array("huangxing","chenyuwei",'xufei','zhangjingwen','xuepei');
	//     ob_start();
	//     //载入模板
	//     require_once("muban.html");
	//     file_put_contents("match.html",ob_get_clean());
	//     require_once('match.html');
	     
	// }
	// 
	 public function index()
      {

		  // $redis = new \Redis();
		  //               $redis->connect('17.0.0.1', 6379);
		  //               $redis->set('myname', 'manu'); //设置值
		  //               $res = $redis->get('myname');
		  //               echo $res;
		  return $this->fetch();
	 }
}

