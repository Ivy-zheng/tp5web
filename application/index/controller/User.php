<?php

namespace app\index\controller;

use think\Controller;
use think\Request;

class User extends Controller
{
     // 是否批量验证
    protected $batchValidate = true;
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
            $data = [
            // 'name'  => 'thinkphp',
            'email' => 'thinkphp.com',
            'age' =>'44滚滚滚'
        ];
        // dump($data);return;
        $validate = new \app\index\validate\User;

        if (!$validate->check($data)) {
            dump($validate->getError());
        }

        // $result = $this->validate(
        //     [
        //         'age'  => 'thinkphp',
        //         'email' => 'thinkphp@qq.com',
        //     ],
        //     'app\index\validate\User');

        // if (true !== $result) {
        //     // 验证失败 输出错误信息
        //     dump($result);
        // }
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
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
