<?php
/*
 * Created on 2015��8��12��
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
 	$con = mysql_connect("localhost","root","") or die("���ݿ�����ʧ��");
 	echo "test";
 	echo mysql_select_db("admin",$con);
 	if(!mysql_select_db("admin",$con)) {
 		$sql = "CREATE DATABASE admin";
 		$status = mysql_query($sql);
 		echo $status;
 		echo "��ѡ���ݿ�����ʧ�ܣ��������ݿ��С���";
 		if($status) {
 			echo "�����ɹ�";
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
		echo "�������ݱ�ɹ�";
	}else {
		echo "�������ݱ�ʧ��".mysql_error();
	}
	/*$insertSql = "insert into `admin` (username,password) values ('admin','666666')";
	$insertStatus = mysql_query($insertSql);
	if($insertStatus) {
		echo "�������ݳɹ�";
	}else {
		echo "��������ʧ��".mysql_error();
	}*/
?>
