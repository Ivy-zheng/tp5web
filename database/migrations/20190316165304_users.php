<?php

use Phinx\Migration\AbstractMigration;
use think\migration\Migrator;
use think\migration\db\Column;

class Users extends AbstractMigration
{
    /**
     * Change Method.
     */
    // public function change()
    // {
        // create the table
        // $table = $this->table('users',array('engine'=>'MyISAM'));
        // $table->addColumn('username', 'string',array('limit' => 15,'default'=>'','comment'=>'用户名，登陆使用'))
        //     ->addColumn('password', 'string',array('limit' => 32,'default'=>md5('123456'),'comment'=>'用户密码'))
        //     ->addColumn('login_status', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'登陆状态'))
        //     ->addColumn('login_code', 'string',array('limit' => 32,'default'=>0,'comment'=>'排他性登陆标识'))
        //     ->addColumn('last_login_ip', 'integer',array('limit' => 11,'default'=>0,'comment'=>'最后登录IP'))
        //     ->addColumn('last_login_time', 'datetime',array('default'=>0,'comment'=>'最后登录时间'))
        //     ->addColumn('is_delete', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'删除状态，1已删除'))
        //     ->addIndex(array('username'), array('unique' => true))
        //     ->create();
    // }

     /**
  * 建立用户表
  */
  public function up(){
    $table = $this->table('users');
    $table->addColumn('username' , 'string' , ['limit' => 30])
       ->addColumn('passwork' , 'string' , ['limit' => 32])
       ->addColumn('email' , 'string' , ['limit' => 25])
       ->addColumn('lastlogin_ip' , 'string' , ['limit' => 15])
       ->addTimestamps('create_time' , 'lastlogin_time')
       ->addColumn('status' , 'integer' , ['limit' => 1 , 'default' => 1])
       ->setId('user_id')
       ->save();

        // // create the table
        // $table = $this->table('users',array('engine'=>'MyISAM'));
        // $table->addColumn('username', 'string',array('limit' => 15,'default'=>'','comment'=>'用户名，登陆使用'))
        //     ->addColumn('password', 'string',array('limit' => 32,'default'=>md5('123456'),'comment'=>'用户密码'))
        //     ->addColumn('login_status', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'登陆状态'))
        //     ->addColumn('login_code', 'string',array('limit' => 32,'default'=>0,'comment'=>'排他性登陆标识'))
        //     ->addColumn('last_login_ip', 'integer',array('limit' => 11,'default'=>0,'comment'=>'最后登录IP'))
        //     ->addColumn('last_login_time', 'datetime',array('default'=>0,'comment'=>'最后登录时间'))
        //     ->addColumn('is_delete', 'boolean',array('limit' => 1,'default'=>0,'comment'=>'删除状态，1已删除'))
        //     ->addIndex(array('username'), array('unique' => true))
        //     ->create();
  }
   
  /**
  * 提供回滚的删除用户表方法
  */
  public function down(){
    // $this->dropTable('user');
  }
}