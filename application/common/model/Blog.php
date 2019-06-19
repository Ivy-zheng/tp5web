<?php

namespace app\common\model;

use think\Model;
use think\Model\Concern\SoftDelete;

class Blog extends Model
{
    use SoftDelete;
    protected $connection = 'demo2';
    // 设置json类型字段
    protected $json = ['content'];
     /**
     * 获取查询列表 age >= 30
     */
    public function getSearchList($id = 1)
    {
    	// 查询年龄大于等于30的用户
        // $users = BlogModel::where('id', '>=', 1)
        //     ->field('id,name')
        //     ->order('id', 'desc')
        //     ->select();

        return $this->where('id','>=',1)
        		//->field('id,name')
        		->order('id','desc')
                // ->fetchSql()
        		->select();
    }

    public function scopeUserName($query, $name = '')
    {
        if ($name) {
            // 查询用户姓名
            $query->where('name', 'like', '%' . $name . '%');
        }
    }

    public function scopeRecommend($query, $age = 0)
    {
        // 查询大于一定年龄的用户
        $query->where('recommend', '>=', $age)
        	->field('id,name,recommend')
            ->order('id', 'desc');
    }

    public function scopeMonth($query)
    {
        // 查询本月内注册的用户
        $query->whereTime('create_time', 'm');
    }
   // 定义一个publish_time字段获取器
    protected function getPublishTimeAttr($value)
    {
        return date('Y-m-d H:i:s', $value);
    }

    // 定义一个publish_time字段修改器
    public function setPublishTimeAttr($value)
    {
        // 写入发布时间
        return time();
    }
}