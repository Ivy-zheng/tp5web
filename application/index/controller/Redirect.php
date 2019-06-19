<?php

namespace app\index\controller;

use think\Controller;

class Redirect extends Controller
{
    /**
     * @route('redirect')
     */
    public function index()
    {
    	// return redirect($this->request->get('url'));
    	return redirect('hello');
    }

    public function hello()
    {
    	return '重定向到这里啦';
    }
}
