<?php
namespace app\index\controller;

use think\Controller;

class Redis extends Controller
{
		/**
		 * [index description]
		 * @return [type] [测试redis]
		 */
	 public function index($name='defaultName')
      {
      	echo $name.'<br />';
    //   	dump(url('testroute',['name'=>'888888']));

		  // $redis = new \Redis();
		  // $redis->connect('127.0.0.1', 6379);
		  // $redis->set('myname', 'manu'); //设置值
		  // $res = $redis->get('myname');
		  // $res2 = $redis->get('yyy');
		  // echo $res,$res2;
	 }

	 /**
	  * [mem description]
	  * @return [type] [測試memcache]
	  */
	  public function mem()
	  {
	  		 $memcache = new \Memcache;
			$memcache->connect("127.0.0.1",11211);
			echo "Memcached's version: " . $memcache->getVersion() . "<br />";
			$data = array(
			           'url' => "http://www.cnblogs.com/wujuntian/",
			           'name' => "编程人，在天涯"
			);
			$memcache -> set("info",$data,0,10);
			$info = $memcache->get("info");
			echo '<pre>';
			print_r($info);
	  }


}