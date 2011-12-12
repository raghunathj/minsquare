<?php
/*
 * This is the Global Include file
 * Used in adding new setting and handeling SESSIONS
 * This file might change when developing
 */
if(!isset($_SESSION)){
	session_start();
}
ob_start();
include 'config.inc.php';
//include 'bootstrap.php';