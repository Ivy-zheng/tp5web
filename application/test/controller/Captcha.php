<?php
namespace app\test\controller;
use think\Controller;
use think\Request;

class Captcha extends Controller
{
    public function index()
    {
        return $this->fetch();
    }


	public function check(){
        $data = input('verify');
        echo $data;
        //注意：需要开启URL路由。'url_route_on' => true,
        if(!captcha_check($data)){
            return '验证码错误';
        }else{
			return '验证码正确';
   		}

  //  		$re =  $this->validate($data,[
		//     'captcha|验证码'=>'require|captcha'
		// ]);
		// dump($re);
		return;
   	}
}
