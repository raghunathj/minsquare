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
		$this->db->connect();
	}
	
	function listquery($table){
		$table_name = $table." WHERE file_type = 1";
		$order_by = "file_name ASC";
		$list = $this->db->display($table_name,$order_by);
		return $list;
	}
	
	function listTables(){
		$table_list = $this->sc->get_table_list('',true,false);
		return $table_list;
	}
	
	function showselected($table,$page){
		$table_name = $table;
		$field = '*';
		$where = 'WHERE id='.$page;
		$count_status = false;
		$data = $this->db->display_selected($table_name,$field,$where,$count_status);
		return $data;
	}
	
	function structure($table){
		$table_structure = $this->sc->get_table_structure($table);
		$data = $this->reformstructure($table_structure);
		return $data;
	}
	
	function reformstructure($data){
		/*foreach($data as $data){
			if($data[1] === "")
		}*/
		return $data;
	}


}