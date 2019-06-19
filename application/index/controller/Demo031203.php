<?php

namespace app\index\controller;

use think\Controller;
use think\facade\Request;
use think\Db;
use app\common\model\Blog;
use think\facade\Log;
use think\facade\Debug;
class Demo031203 extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        Debug::remark('begin');
        Log::record('测试日志信息-save','notice');
        trace('ceshi','error');
        log::error('error test');
        log::write('wrute debug','debug');
        // dump(new kk());
        // dump(Db::name('blog')->where('name','first')->select());
        dump(Db('blog')->where('name','first')->fetchSql()->column('id,name','id'));
        log::save();
        Debug::remark('end');
        dump(Debug::getRangeTime('begin','end').'s');
        echo Debug::getRangeMem('begin','end');
        return 'index';

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
        // $blog = new Blog();
        // $blog->name = 'thinkphp';
        // $blog->content = [
        //     'email'    => 'thinkphp@qq.com',
        //     'nickname'=> '流年',
        // ];
        // $blog->title = 'new';
        // $blog->save();
        // 
        dump(THINK_VERSION);exit;

        $blog = Blog::get(20);
        dump($blog);
        echo $blog->name; // thinkphp
        echo $blog->content->email; // thinkphp@qq.com
        echo $blog->content->nickname ; // 流年


        // $blog = new Blog();
        // $list = [
        //     ['name'=>'thinkphp','content'=>'thinkphp@qq.com','title'=>'title'],
        //     ['name'=>'onethink','content'=>'onethink@qq.com','title'=>'title']
        // ];
        // dump($blog->saveAll($list));
        // $data = Request::only(['name','content','title']);
        // $data = Request::param();
        // dump($blog->save($data));
        // echo '-----------'.$blog->id;
        // $data = [
        //     'name'=>'n1','title'=>'t1','content'=>'c1'
        // ];
        // dump(Db('blog')->insertGetId($data));
        //    $data = [
        //     ['name'=>'n1','title'=>'t1','content'=>'c1'],
        //     ['name'=>'n2','title'=>'t2','content'=>'c2'],
        //     ['name'=>'n3','title'=>'t3','content'=>'c3'],
        // ];
        // dump(Db('blog')->data($data)->insertAll());
        return;
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
        // Db('blog')->where([''])
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
