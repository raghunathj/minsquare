<?php
include '../config/include_global.php';
	//Load required classes
	$core_class = array(
					"db" => "core",
					"scaffold" => "core"
	);
$load->load_class($core_class);
$ourFileName = "../ajax/testFile.php";
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);