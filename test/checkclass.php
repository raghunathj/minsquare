<?php
include '../config/include_global.php';
include '../core/class.inc.php';
$core_class = array(
				"core" => "db"
			);
$call = new call();
$db = $call->call_classes($core_class);
$db->connect();
$result = $db->display("test","id desc");
echo '<pre>';
print_r($result);
echo '</pre>';
				