<?php

class authModel {
	public $admin;
	public function __construct($objtype = "admin"){
		$this->admin = M($objtype);
	}
    public function checkauth($username,$password) {
		$auth = $this->admin->findOne_by_username($username);
		if(!empty($auth) || ($auth['password'] && $auth['password'] == $password) ) {
			return $auth;
		}else {
			return false;
		}
    }
}
?>