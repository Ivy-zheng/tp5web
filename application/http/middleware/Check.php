<?php

namespace app\http\middleware;

class Check
{
    public function handle($request, \Closure $next)
    {
    	dump($request->param('name'));
        echo '!!tt!!<br/>';
    	if ($request->param('name') == 'test') {
            //return redirect('index/think');
            echo 'hahahhahaha come on baby!!1';
        }else
        {
        	echo 'hahahhahaha come on baby!!2';
        }
 		return $next($request);
    }
}
