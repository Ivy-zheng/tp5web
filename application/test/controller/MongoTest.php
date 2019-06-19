<?php
/**
 * @author: jim
 * @date: 2017/11/17
 */
namespace app\test\controller;
use think\Controller;
use think\mongo;
use MongoDB\Driver\Manager;
use think\Collection;
class MongoTest extends Controller
{
  protected $mongoManager;
  protected $mongoCollection;
  public function __construct()
  {
    $this->mongoManager = new Manager($this->getUri());
    $this->mongoCollection = new Collection($this->mongoManager, "mldn","dept");
  }
  public function test() {
    // 读取一条数据
    $data = $this->mongoCollection->find();
    print_r($data);
  }
  protected function getUri()
  {
    return getenv('MONGODB_URI') ?: 'mongodb://127.0.0.1:27017';
  }
}