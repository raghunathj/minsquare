<?php 
/*
 * minsqure Scaffold file.
 * Dont Change anything
 * 
 */

class min_scaffold extends controller{
	
	public function __construct(){
		include 'model/scaffold.php';
	}
	
	public function index(){
		include 'view/scaffold/index.php';
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