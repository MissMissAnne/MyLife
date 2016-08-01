<?php
namespace app\index\controller;

use think\View;
use think\Controller;
use app\index\model\User;


class Admin  extends Controller
{ 
    public function index()
    {
    	return $this->fetch();
	}
}