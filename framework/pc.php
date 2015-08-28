<?php
/*
 * Created on 2015年8月10日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	$currentdir = dirname(__FILE__);
 	include_once($currentdir.'/include.list.php');
 	foreach($paths as $path) {
 		require_once($currentdir.'/'.$path); 
 	}
 	
 	class pc {
 		public static $controller;
 		public static $method;
 		private static $config;
 		private static $controllerArray;
 		private static function init_db() {
 			DB::init('mysql',self::$config['dbconfig']);
 		}
 		private static function init_view() {
 			VIEW::init('Smarty',self::$config['viewconfig']);	
 		}
 		private static function init_controller() {
 			if(key($_GET) != 'controller' && !empty($_GET)){
 				VIEW::assign(array('loginErrorMsg'=>"错误链接"));
 				VIEW::display('admin/error.html');
 				exit();
 			}
 			self::$controller = isset($_GET['controller'])?daddslashes($_GET['controller']):'index';
 		}
 		private static function init_method() {
 			self::$method = isset($_GET['method'])?daddslashes($_GET['method']):'index';
 		}
 		public static function run($config,$controllerArray) {
 			self::$controllerArray = $controllerArray;
 			self::$config = $config;
 			self::init_db();
 			self::init_view();
 			self::init_controller();
 			self::init_method();
 			if(in_array(self::$controller,$controllerArray))
 				C(self::$controller,self::$method);
 			else {
 				VIEW::assign(array('loginErrorMsg'=>"错误链接"));
 				VIEW::display('admin/error.html');
 				exit();
 			}
 		}
 		
 	}
?>
