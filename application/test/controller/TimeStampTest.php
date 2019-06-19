<?php
namespace app\test\controller;
use think\Controller;
use think\helper\Str;
use think\helper\Time;

class TimeStampTest extends Controller
{
	public function index()
	{
		echo Str::lower('FFFF');
		list($start, $end) = Time::today();

		echo $start; // 零点时间戳
		echo $end; // 23点59分59秒的时间戳
	}
}