<?php

namespace app\index\controller;

use think\Controller;

/**
 * @alias('request')
 */
class Info extends Controller
{
    /**
     * 获取当前请求变量
     * @access public
     */
    public function param()
    {

        dump($this->request->param('id'));
        echo $this->request->param('name');
    	dump($this->request->param());
        echo '获取id和name变量';
        dump($this->request->only(['id','name']));
        return '';
    }

}