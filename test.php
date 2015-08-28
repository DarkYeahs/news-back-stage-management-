<?php
/*
 * Created on 2015年8月12日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	$con = mysql_connect("localhost","root","") or die("数据库链接失败");
 	echo "test";
 	echo mysql_select_db("admin",$con);
 	if(!mysql_select_db("admin",$con)) {
 		$sql = "CREATE DATABASE admin";
 		$status = mysql_query($sql);
 		echo $status;
 		echo "所选数据库链接失败，创建数据库中。。";
 		if($status) {
 			echo "创建成功";
 			mysql_select_db("admin",$con);
 			
 		}
 	}
	$sql = "CREATE TABLE news (
			id int(3) primary key not null auto_increment,
			title char(40) not null,
			author char(20) not null,
			content text not null,
			froms char(20) not null,
			dateline TIMESTAMP 
			)";
	$createtableStatus = mysql_query($sql);
	if($createtableStatus) {
		echo "创建数据表成功";
	}else {
		echo "创建数据表失败".mysql_error();
	}
	/*$insertSql = "insert into `admin` (username,password) values ('admin','666666')";
	$insertStatus = mysql_query($insertSql);
	if($insertStatus) {
		echo "插入数据成功";
	}else {
		echo "插入数据失败".mysql_error();
	}*/
?>
