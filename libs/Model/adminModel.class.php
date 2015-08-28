<?php

class adminModel {
	private $table ='admin';
	public function findOne_by_username($username) {
		$sql = "SELECT * FROM ".$this->table." where username ='".$username."'"; 
		return DB::findOne($sql);
	}
	public function count() {
		$sql = "SELECT COUNT(*) FROM news";
		return DB::findOne($sql);
	}
}
?>