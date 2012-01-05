<?php
//Regex
echo $text = "varchar (112)";
$regex = "";
$regexop = preg_replace("/\(.*\)/", "", $text);
$regfinal = rtrim($regexop, ' ');
echo $regfinal;