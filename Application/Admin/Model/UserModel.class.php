<?php

namespace Admin\Model;
use Think\Model;
class UserModel extends Model {
	public function login($user,$pwd){
		if(empty($user)){
			return false;
		}else{
			$result = $this->query("select name, password from user where name ='{$user}' and password = '{$pwd}'");
			return $result;
		}
	}
	

	
}