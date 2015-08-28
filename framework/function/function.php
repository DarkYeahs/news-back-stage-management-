<?php
/*
 * Created on 2015年8月10日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	function M($name) {
 		require_once("libs/Model/".$name."Model.class.php");
 		eval('$obj = new '.$name.'Model();');
 		return $obj;
 	}
 	function V($name) {
 		require_once("libs/View/".$name."View.class.php");
 		eval('$obj = new '.$name.'View();');
 		return $obj;
 		
 	}
 	function C($name,$method) {
 		require_once("libs/Controller/".$name."Controller.class.php");
		eval('$obj = new '.$name.'Controller();') ;
		if(!method_exists($obj,$method)) {
 			VIEW::display("admin/error.html");
 			echo $name;
 			echo $method;
 			echo "阻拦成功";
 			exit();	
		}
 		$obj->$method();
 	}
 	function ORG($path,$name,$params = array()) {
 		require_once('libs/ORG/'.$path.$name.'.class.php');
 		$obj = new $name();
 		if(!empty($params)) {
 			foreach($params as $key=>$value) {
 				$obj->$key = $value;
 			}
 		}
 		return $obj;
 		
 	}
 	function daddslashes($str) {
 		return (!get_magic_quotes_gpc())?addslashes($str):$str;
 	}
?>
