<?php 
/*
 * minsqure dashboard file.
 * Dont Change anything
 * This is placed in view
 */

//Load required classes
/*$core_class = array(
				"db" => "core"
			);
$load->load_class($core_class);
$db = new db();
$db->connect();
switch($action){
	
}*/
//Page Title
$this->smarty->assign('page_title','Dashboard');
//Page Name
$this->smarty->assign('page_name','Dashboard');
//Page Slang/Small Description
$this->smarty->assign('page_slang','Welcome to your Dashboard');


//Display Data
$this->smarty->display('index.tpl');