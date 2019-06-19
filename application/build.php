<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    // 生成应用公共文件
    '__file__' => ['common.php'],

     // 定义demo模块的自动生成
    'demo'   => [
        '__file__'   => ['tags.php', 'user.php', 'hello.php'],
        '__dir__'    => ['config', 'controller', 'model', 'view'],
        'controller' => ['Index', 'Test', 'UserType'],
        'model'      => [],
        'view'       => ['index/index'],
    ],    
    
    // 定义test模块的自动生成
    'test2'=>[
        '__dir__'   =>  ['config','controller','model','widget'],
        'controller'=>  ['Index','Test','UserType'],
        'model'     =>   ['User','UserType'],
        'view'      =>  ['index/index','index/test'],
    ],
];
