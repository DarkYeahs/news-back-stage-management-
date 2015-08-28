<?php

class indexController {
	public static $obj;
	public function __construct($objtype = 'admin') {
		self::$obj = M($objtype);
		if(!isset($_SESSION)) {
			session_start();
		}
	}
	public function index() {
		if(!isset($_SESSION['auth'])) {
			VIEW::display('admin/login.html');
		} else {
			$newsnum = self::$obj->count();
			$newsnum = $newsnum['COUNT(*)'] ;
			$username = $_SESSION['auth']['username'];
			VIEW::assign(array("newsnum"=>$newsnum,"username"=>$username));
			VIEW::display('admin/index.html');
		}
	}
    
}
?>