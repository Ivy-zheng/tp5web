<?php
namespace app\index\controller;

use think\Controller;
use think\Request;
class AskController extends Controller
{
   public function index()
   {
   	 // S('test1','lalallala');
   	 // echo S('test1');
   	 // 
   	 cache('test1','lalalla');
   	 echo cache('test1');

   	 echo config('app.default_lang');

   	 cookie('zxm','myqq');
   	 echo cookie('zxm');
   } 
}