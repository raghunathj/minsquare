<?php /* Smarty version Smarty-3.1.7, created on 2011-12-24 04:20:45
         compiled from "theme/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:146374ef503302226b7-83217325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4ff364d9fad32f41c79053bc11218e653812df9' => 
    array (
      0 => 'theme/default\\header.tpl',
      1 => 1324680643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146374ef503302226b7-83217325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef5033022dfc',
  'variables' => 
  array (
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef5033022dfc')) {function content_4ef5033022dfc($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
		<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.4.0/bootstrap.min.css">
		<style>
			body {
        		padding-top: 60px; /* 40px to make the container go all the way to the bottom of the topbar */
      		}
		</style>
	</head>
	<body><?php }} ?>