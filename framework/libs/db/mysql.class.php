<?php

class mysql {
	function err($error) {
		die("对不起，您的操作有误，错误原因为".$error);
	}
	
	function connect($config) {
		extract($config);
		if(!($con = mysql_connect($dbhost,$dbuser,$dbpsw))) {
			$this->err(mysql_error());
		} else if(!(mysql_select_db($dbname,$con))) {
			$this->err(mysql_error());
		}
		mysql_query("set names".$dbcharset);
	}
    function query($sql) {
    	if(!($query = mysql_query($sql))) {
    		$this->err(mysql_error());
    	} else {
    		return $query;
    	}
    }
    function findAll($query) {
    	while($attr = mysql_fetch_array($query,MYSQL_ASSOC)) {
    		$list[] = $attr;
    	}
    	return isset($list)?$list:"";
    }
    function findOne($query) {
    	$attr = mysql_fetch_array($query,MYSQL_ASSOC);
    	return $attr;
    }
    function findResult($query,$row = 0, $filed = 0) {
    	$attr = mysql_result($query,$row,$filed);
    	return $attr;
    }
    function insert($table,$arr) {
    	foreach($arr as $key=>$value) {
    		$value = mysql_real_escape_string($value);
    		$keyArr[] = $key;
    		$valueArr[] = "'".$value."'";
    	}
    	$keys = implode(",",$keyArr);
    	$values = implode(",",$valueArr);
    	$sql = "INSERT INTO ".$table."(".$keys.")"."values (".$values.")";
    	$this->query($sql);
    	return mysql_insert_id();
    }
    function update($table,$arr,$where) {
    	foreach($arr as $key=>$value) {
    		$value = mysql_real_escape_string($value);
    		$keysAndValuesArr[] = "`".$key."` = '".$value."'";
    	}
    	$keysAndValues = implode(",",$keysAndValuesArr);
    	$sql = "UPDATE ".$table." SET ".$keysAndValues." where ".$where;
    	$this->query($sql);
    }
    function del($table,$where) {
    	$sql = "DELETE FROM ".$table." where ".$where;
    	$this->query($sql);
    }
}
?>