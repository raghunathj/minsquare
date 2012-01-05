<?php 
/*
 * minsqure Scaffold file.
 * Dont Change anything
 * 
 */

class min_scaffold_controller extends controller{
	public $minmodel = null;
	public $test = 23;
	public function __construct(){
		controller::__construct();
		include 'model/scaffold.php';
		$this->minmodel = new min_scaffold_model();
	}
	
	public function index(){
		//echo $this->test;
		$datalist = $this->minmodel->listquery('min_scaffold');
		include 'view/scaffold/index.php';
	}
	
	public function newtemplate(){
		$pageid = (int)$_GET['page'];
		$page_data = $this->minmodel->showselected('min_scaffold',$pageid);
		$table_list = $this->minmodel->listTables();
		include 'view/scaffold/newtemplate.php';
	}
	
	public function scaffoldstructure(){
		$table = $_GET['tablename'];
		$table_data = $this->minmodel->structure($table);
		//$new_data = $table_data['table_fields']
		echo "TABLE NAME IS: ".$table;
		include 'view/scaffold/ajax/createstructure.php';
	}
	
	public function create(){
		include 'view/scaffold/create.php';
	}
	
	public function edit(){
		include 'view/scaffold/edit.php';
	}
	
	public function delete(){
		include 'view/scaffold/delete.php';
	}
	
	
}