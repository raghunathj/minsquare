<?php
if(!empty($_POST)){
	include("../config/include_global.php");
	//Load required classes
	$core_class = array(
					"db" => "core",
					"scaffold" => "core"
	);
	$load->load_class($core_class);
	//Initialize and connect to database
	$db = new db();
	$db->connect();
	$scaffold = new scaffold();
	$filename = $_POST['scaffold_filename'];
	$tablename = $_POST['scaffold_table'];
	$create_mvc = $scaffold->quick_create($filename, $tablename);
	switch($create_mvc){
			case 1:
				header("Location:".$baseurl.'scaffold/template.php?file='.$filename);
			break;
			case 2:
				header("Location:".$baseurl.'scaffold/index.php?error=2');
			break;
			case 3:
				header("Location:".$baseurl.'scaffold/index.php?error=3');
			break;
	}
}else{
	header("Location:".$baseurl.'scaffold/index.php?error=4');
}