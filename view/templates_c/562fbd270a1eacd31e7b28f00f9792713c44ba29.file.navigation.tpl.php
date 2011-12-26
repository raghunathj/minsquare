<?php /* Smarty version Smarty-3.1.7, created on 2011-12-24 03:54:27
         compiled from "../theme/default\navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:310464ef4ff9b1e9fd4-12021658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '562fbd270a1eacd31e7b28f00f9792713c44ba29' => 
    array (
      0 => '../theme/default\\navigation.tpl',
      1 => 1324678271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310464ef4ff9b1e9fd4-12021658',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef4ff9b1ebf1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef4ff9b1ebf1')) {function content_4ef4ff9b1ebf1($_smarty_tpl) {?><div class="topbar">
			<div class="topbar-inner">
				<div class="container">
					<h3><a href="?page=dashboard">min<sup>2</sup></a></h3>
					<ul class="nav">
						<li><a href="?page=dashboard">Dashboard</a></li>
						<li class="dropdown" data-dropdown="dropdown">
							<a href="#" class="dropdown-toggle">Modules</a>
							<ul class="dropdown-menu">
								<li><a href="?page=products">Products</a></li>
								<li><a href="?page=products">Navigation</a></li>
								<li><a href="?page=products">Banners</a></li>
							</ul>
						</li>
						<li><a href="?page=users">Users</a></li>
						<li><a href="?page=media">Media</a></li>
						<li><a href="?page=tools">Tools</a></li>
						<li><a href="?page=settings">Settings</a></li>
						<li><a href="?page=reports">Reports</a></li>
					</ul>
					<ul class="nav secondary-nav">
						<li class="dropdown" data-dropdown="dropdown">
							<a href="#" class="dropdown-toggle">Raghunath</a>
							<ul class="dropdown-menu">
								<li><a href="?page=account">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="?page=logout">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
</div><?php }} ?>