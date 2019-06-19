<?php


	// // 注册 app\index\behavior\CheckLang行为类到app_init标签位
	// Hook::add('test_1','app\\index\\behavior\\BehaviorTest'); 
	// //注册 app\admin\behavior\CronRun行为类到app_init标签位
	// Hook::add('test_2','app\\index\\behavior\\BehaviorTest');
	// //注册 app\admin\behavior\CronRun行为类到app_init标签位
// 	 Hook::add('app_end','app\\index\\behavior\\BehaviorTest',['name'=>'tttttttttttt']);
return [
//     'app_init'=> [
//         'app\\index\\behavior\\BehaviorTest'
//     ],
    'test_1'=>[
    	 'app\\index\\behavior\\BehaviorTest'
    ],

//    'app_end'=> [
//         'app\\index\\behavior\\BehaviorTest'
//     ],

//     'action_begin'=> [
//         'app\\index\\behavior\\Test'
//     ],
//     'app_begin'=> [
//         'app\\index\\behavior\\BehaviorTest'
//     ],
//     'module_init'=> [
//         'app\\index\\behavior\\BehaviorTest'
//     ],

];

