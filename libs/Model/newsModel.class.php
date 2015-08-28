<?php

class newsModel {
	private $table = 'news';
	public function findAll_orderby_dateline() {
		$sql = "SELECT * FROM ".$this->table.' order by dateline desc';
		return DB::findAll($sql);
	}
	public function findOne_by_id($id) {
		$sql = "SELECT * FROM ".$this->table." where id = '".$id."'";
		return DB::findOne($sql);
	}
	public function del_by_id($id) {
		return DB::del($this->table,'id = '.$id);
	}
    public function count() {
    	$sql = "SELECT COUNT(*) FROM ".$this->table;
    	return DB::findOne($sql);
    }
    public function insert($data) {
    	return DB::insert($this->table,$data);
    }
    public function update($data,$id) {
    	return DB::update($this->table, $data, "id = '".$id."'");
    }
}
?>