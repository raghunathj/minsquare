<?php
//URL test
include '../config/include_global.php';
$core_class = array(
				"minsquare" => "core"
			);
$cl = $load->load_class($core_class);
$min = new minsquare('/minsquare/test/','dashboard','view');
$res = $min->url_request();
$res2 = $min->parse_url();
print_r($res2);

print_r($_GET);

echo $_GET['hello'];