<?php
/*
 * Main Include File
 */
include("config/include_global.php");

/*
 * Enable Template Engine
 */
//require "lib/smarty/Smarty.class.php";

require "lib/controller.php";

/*
 * Theme Location
 */


$view = 'dashboard';

/*
 * Run Router
 */
$core_class = array(
				"router" => "core"
			);
$load->load_class($core_class);
$min = new router('/minsquare/',$view,'index');
$min->url_request();
$min->parse_url();


/*
 * Load Controller
 */

$min->route_request();