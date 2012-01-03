<?php 
/*
 * minsqure dashboard file.
 * Dont Change anything
 * 
 */

class min_dashboard extends controller{
	
	public function __construct(){
		parent::__construct();
		
		
	}
	
	public function index(){
		
		include 'view/dashboard/index.php';
	}
	
	public function edit(){
		include 'view/dashboard/nopage.php';
	}
	
	public function delete(){
		include 'view/dashboard/nopage.php';
	}
	
	
}
