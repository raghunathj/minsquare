<?php
//Model file for Scaffold

class min_scaffold_model extends model{
	public $db = null;
	function __construct(){
		parent::model();
		$this->db = new db();
	}
	
	function listquery(){
		display($table_name,$order_by);
	}

}