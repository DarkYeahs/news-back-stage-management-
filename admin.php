<?php
/*
 * Created on 2015��8��10��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	header("Content-type: text/html;charset=gb123");
 	require_once("config.php");
 	require_once("framework/pc.php");
 	pc::run($config,$controllerArray);
?>
