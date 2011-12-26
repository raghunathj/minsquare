<?php 
/*
 * minsqure dashboard file.
 * Dont Change anything
 * 
 */

class min_dashboard extends controller{
	
	function __construct(){
		parent::__construct();
		echo "LOADED";
	}
	
	function index(){
		include 'view/dashboard/index.php';
	}
	
	function edit(){
		
	}
	
	function delete(){
		
	}
	
	
}
