<?php
namespace app\index\behavior;

class BehaviorTest
{
	public function run($params)
	{
		  echo "BehaviorTest钩子执行了方法"."<br/>";
	}

	public function appInit($params)
    {
         echo 'test.appInit||||'.$params['name'].'<br/>';
    }

    public function appEnd($params)
    {
         echo 'test.appEnd <br/>'.'---';
         dump($params);
    }


    public function appBegin($params)
    {
         echo 'test.appBegin <br/>';
    }


    public function ModuleInit($params)
    {
         echo 'test.ModuleInit <br/>';
    }

    public function TestInit($params)
    {
         echo '$$$$$$$$$$$$$$$$$$$$$$$$$ <br/>';
    }
}
