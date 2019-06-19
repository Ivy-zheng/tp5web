<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class Demo031201 extends Controller
{

    public function _empty()
    {
        return 'empty';
    }

    protected function initialize()
    {
        echo 'init<br/>';
    }

    protected $beforeActionList=[

            'first',
            'second'=>['only'=>'index'],
            'three'=>['except'=>'index'],

    ];

     protected function first()
    {
        echo 'first<br/>';
    }
    
    protected function second()
    {
        echo 'second<br/>';
    }
    
    protected function three()
    {
        echo 'three<br/>';
    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index($name=1)
    {
        $nameget = $this->request->get('name','1111');
        $nameparam = $this->request->param('name');
        $nameroute = $this->request->route('name');

        dump($nameget);
        dump($nameparam);
        dump($nameroute);

        // $event = controller('Blog', 'event');
        // echo $event->update(5); // 输出 update:5
        // echo $event->delete(5); // 输出 delete:5
        // $this->success('执行成功');
        return 'index';
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        $this->error('执行是小白');
        return 'create';
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
