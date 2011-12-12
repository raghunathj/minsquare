<?php
include '../config/include_global.php';
include '../config/bootstrap.php';
$db = new db();
$db->connect();
$result = $db->display("test","id desc");
if($result){
	echo "yest";
}
echo '<pre>';
print_r($result);
echo '</pre>';
echo '<hr/>';
$result = $db->list_tables("",true);
echo 'List Tables';
echo '<pre>';
print_r($result);
echo '</pre>';
?>