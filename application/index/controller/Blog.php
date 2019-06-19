<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use app\common\model\Blog as BlogModel;
use think\facade\Config;
class Blog extends Controller
{
    public function test2()
    {
          echo 'ddddd';
          return  'dddd'.app('app\index\controller\Test')->index();

    }

       public function search()
    {
        // 查询年龄大于等于30的用户
        // $users = BlogModel::where('id', '>=', 1)
        //     ->field('id,name')
        //     ->order('id', 'desc')
        //     ->select();
            // dump(Config::get('pathinfo_depr'));
            // dump(config('app.name'));



            // exit;
        $use = new BlogModel;
        $users = $use->getSearchList();
        // $users = BlogModel::userName('')
        //         //->recommend()
        //         //->month()
        //         ->select();
         dump($users);
        // $name = BlogModel::getByName('thinkphp');
        // dump($name);
        // $users = BlogModel::search();
        $this->assign('users', $users);

        return $this->fetch();
    }



    /**
     * 显示资源列表
     * @return \think\Response
     */
    public function index()
    {
        dump(phpinfo());
       $arr = [1,2,3];
        foreach ($arr as &$val) {
            echo current($arr);// php7 全返回0
        }

        $arr = [1,2,3];
        foreach ($arr as $val) {
            unset($arr[1]);
        }
        var_dump($arr);
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
        // $blog = new BlogModel;
        
        // $blog->title        = '测试标题';
        // $blog->name         = 'first';
        // $blog->content      = '测试博客内容';
        
        // $blog->save();
        
        // return '博客[' . $blog->id . ']新增成功';

        //  $data['title']   = '测试标题';
        // $data['name']    = 'first';
        // $data['content'] = '测试博客内容';
        
        // $blog = BlogModel::create($data);
        
        // return '博客[' . $blog->id . ']新增成功';

                $data = $request->param();
        $blog = BlogModel::create($data, ['name', 'title', 'content','recommend']);

        return '博客[' . $blog->id . ']新增成功';
 
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        $blog = BlogModel::get($id);
        
        $this->assign('blog', $blog);

        return $this->fetch();
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
        $blog = BlogModel::get($id);
        $blog->name = 'newName';
        $blog->content = 'newContent';

        $blog->save();
        dump($blog);

        return '保存更新的资源'.$blog->id.'成功';
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        $blog = BlogModel::get($id);
        $blog->delete();

        return '删除指定资源'.$blog->id.'成功';
    }



}
