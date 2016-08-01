<?php
namespace app\index\controller;

use think\Db;
use think\Controller;
use app\index\model\User;


class Regist  extends Controller
{ 
    public function index()
    {
    	return $this->fetch();
	}
	public function regist()
	{
		//实例化空User
    	$user = new User;
    	$user->name = trim($_POST['username']);
    	$user->password = trim($_POST['password2']);
    	$user->email = trim($_POST['email']);

    	if ( $user->save() )
    		return $this->success("注册成功",'/');
    	else
    		return $this->error("注册失败");
	}
	
}