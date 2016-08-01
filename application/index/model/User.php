<?php
namespace app\index\model;
use think\Model;
class User extends Model
{
	protected $fields = array('id', 'name', 'password', 'email');  //表结构
	protected $pk = 'id';//定义当前数据表的主键名
}