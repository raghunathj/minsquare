<?php
/* 
 * Minsquare lite framework
 * File: Configuration File
 * Version 1.0
 * Author: Raghunath J
 */

///Use this file to config your system

//Eg: http://localhost/minsquare/
$config['site_url'] = 'http://localhost/minsquare/';

//All availble language. Currently English
$config['language'] = array('en');

//If development mode set it as true else false.
$config['debug'] = true;

//To load bootstrap file, set as true else false. 
$config['bootstrap'] = true;

/*
 * Database Settings
 * Be sure you enter the details correctly
 */

$config['database'] = array(
					  'host' => "localhost",
					  'sql'  => "mysql",
					  'username' => "root",
					  'password' => "",
					  'newparam' => array()
					);



