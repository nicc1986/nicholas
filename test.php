<?php
namespace app\admin;
const SITE_NAME = 'php中文';
function getDomain(){
	return 'www.baidu.com';
}
class Demo{
	public static function hello(){
		return '祝贺党的十九大胜利召开';
	}
}
echo SITE_NAME.'<br>';
echo getDomain().'<br>';
echo Demo::hello().'<hr>';

namespace app\admin\user;
const SITE_NAME = 'java中文';
function getDomain(){
	return 'www.baidu.com';
}
class Demo{
	public static function hello(){
		return  '好好学习';
	}
}
namespace app\admin;
echo user\SITE_NAME.'<br>';
echo user\getDomain().'<br>';
echo user\Demo::hello().'<hr>';
echo \app\admin\SITE_NAME.'<br>';
echo \app\admin\getDomain().'<br>';
echo \app\admin\Demo::hello().'<hr>';
echo \app\admin\user\SITE_NAME.'<br>';
echo \app\admin\user\getDomain().'<br>';
echo \app\admin\user\Demo::hello().'<hr>';

