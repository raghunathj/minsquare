<?php
/*
 * This is the minsquare config page
 * Will be changing in the future
 */

$baseurl = "http://localhost/minsquare/";

$admin_path = trim($_SERVER['admin_path'], '/').'/';
$core_path = trim($_SERVER['core_path'], '/').'/';

/*
 * SQL detials
 */

$min_db_host = "localhost";
$min_db_username = "root";
$min_db_password = "";
$min_db_database ="minsquare";

//Define SQL details for further use

define("DBHOST",$min_db_host);
define("DBUSERNAME",$min_db_username);
define("DBPASSWORD",$min_db_password);
define("DBDATABASE",$min_db_database);

/*
 * Location Time
 */

define("LOCALTIME",date_default_timezone_set('Asia/Kolkata'));

/*
 * Memory and time log
 */
defined('MIN_START_TIME') or define('MIN_START_TIME', microtime(true));
defined('MIN_START_MEM') or define('MIN_START_MEM', memory_get_usage());

/*
 * Log file Path
 */
$err_log_url = $baseurl.'log/';
define("ERRORLOG",$err_log_url);

/*
 * App in production or development mode
 */

$pro_mode = false;
define("PRMODE",$pro_mode);