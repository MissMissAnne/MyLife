<?php
namespace app\index\controller;

use think\Controller; //导入命名空间的库类
use think\Db;
use app\index\model\User;

class Index  extends Controller
{ 
    public function index()
    {	
    	return $this->fetch();
	}

	public function login()
	{
		$user = new User;
		$name = trim($_POST['usename']);
		$password = trim($_POST['password']);
		$result = $user->where("name = '$name' and password = '$password' ")->select();
		if ($result)
			return $this->redirect('index.php/index/admin/index');
		else
    		return $this->error("用户名或密码不正确");
	} 
}