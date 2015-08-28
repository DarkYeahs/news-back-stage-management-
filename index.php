<?php
/*
 * Created on 2015Äê8ÔÂ14ÈÕ
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 header('Content-type:text/html;charset=utf-8');
 require('framework/libs/core/DB.class.php');
 require('framework/libs/db/mysql.class.php');
 require('framework/function/function.php');
 require('libs/Model/newsModel.class.php');
 require('config.php');
 DB::init("mysql",$config['dbconfig']);
 $test = M('news');
 $arr = $test->findAll_orderby_dateline();
 print_r($arr);
 
?>
