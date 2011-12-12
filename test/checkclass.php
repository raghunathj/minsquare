<?php
include '../config/include_global.php';
$core_class = array(
				"db" => "core",
				"scaffold" => "core"
			);
$call = new load();
$cl = $call->load_class($core_class);
$db = new db();
$db->connect();
$cls = new scaffold();
$result = $cls->get_table_list("",true,true);
echo '<pre>';
print_r($result);
echo '</pre>';
				