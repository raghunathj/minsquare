<?php 
/*
 * minsqure dashboard file.
 * Dont Change anything
 * This is placed in view
 */
//Load required classes
//Page Title
$page_title = "Home";
$page_name = "Dashboard";
$page_slang = "Welcome Home";
//Include Template
require THEME.'header.php';
require THEME.'navigation.php';
?>
<div class="container">
	<div class="page-header">
		<h1><?php echo $page_name;?> <small><?php echo $page_slang;?></small></h1>
	</div>
	<div class="nopage">
		No Page Found
	</div>
<?php 
require THEME."footer.php";
?>
</div>