<?php
//Model file for Scaffold

class min_scaffold_model extends model{
	public $db = null;
	public $sc = null;
	function __construct(){
		parent::__construct();
		include("core/scaffold.inc.php");
		$this->db = new db();
		$this->sc = new scaffold();
	}
	
	function listquery($table){
		$this->db->connect();
		$table_name = $table." WHERE file_type = 1";
		$order_by = "file_name ASC";
		$list = $this->db->display($table_name,$order_by);
		return $list;
	}
	
	function listTables(){
		$table_list = $this->sc->get_table_list('',true,false);
		return $table_list;
	}

}