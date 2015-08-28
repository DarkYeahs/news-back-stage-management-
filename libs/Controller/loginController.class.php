<?php

class loginController {
	public $auth;
	public $errorMsg;
	public $objtype;
	public function __construct() {
		session_start();
		if(!isset($_SESSION['auth']) && (PC::$method !='login')) {
			$this->showmessage(2, 'admin.php?controller=loginController&&method=login');
		}else {
			$this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
		}
	}
	public function login() {
		if(!isset($_POST)) {
			VIEW::display('admin/login.html');
		} else {
			$this->checklogin();
		}
	}
	public function checklogin() {
		if(empty($_POST['username']) || empty($_POST['password'])) {
			$this->showmessage(3,"admin.php?controller=loginController&&method=login");
		}else {
			$username = daddslashes($_POST['username']);
			$password = daddslashes($_POST['password']);
			$authobj = M('auth');
			if($this->auth = $authobj->checkauth($username,$password)) {
				$_SESSION['auth'] = $this->auth;
				$this->showmessage(0,'admin.php?controller=index&&method=index');
			}else {
				$this->showmessage(1,'admin.php?controller=login&&method=login');
			}
		}
	}
	public function loginout() {
		if(!isset($_SESSION)) {
			session_start();
		}
		unset($_SESSION['auth']);
		VIEW::display("admin/login.html");
	}
	public function showmessage($status,$url) {
		switch($status) {
			case 0:{
				echo "<script>alert('��½�ɹ�');window.location.href='$url';</script>";
			}	
				break;
			case 1:{
				$this->errorMsg = "�˺����������������µ�¼";
				VIEW::assign(array("loginErrorMsg"=>$this->errorMsg,"loginErrorUrl=>$url"));
				VIEW::display('admin/error.html');
			}
			break;
			case 3: {
				$this->errorMsg = "�˺���������δ��ȫ����ص���½�������µ�¼";
				VIEW::assign(array("loginErrorMsg"=>$this->errorMsg,"loginErrorUrl"=>$url));
				VIEW::display('admin/error.html');
			}
			break;
		}
	}
}
?>