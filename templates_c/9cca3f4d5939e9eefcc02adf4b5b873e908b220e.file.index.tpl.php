<?php /* Smarty version Smarty-3.1.7, created on 2011-12-24 04:21:23
         compiled from "theme/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10924ef503301d1a93-49299982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cca3f4d5939e9eefcc02adf4b5b873e908b220e' => 
    array (
      0 => 'theme/default\\index.tpl',
      1 => 1324680679,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10924ef503301d1a93-49299982',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4ef5033021585',
  'variables' => 
  array (
    'page_name' => 0,
    'page_slang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ef5033021585')) {function content_4ef5033021585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="container">
	<div class="page-header">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_name']->value;?>
 <small><?php echo $_smarty_tpl->tpl_vars['page_slang']->value;?>
</small></h1>
	</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>