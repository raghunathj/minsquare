<?php 
/*
 * minsquare scaffold file.
 * Dont Change anything
 * This is placed in view
 */
//Load required classes


//Page Title
$page_title = "Scaffold - New File";
$page_name = "Scaffold - New File";
$page_slang = "Generate New File";

//Core files

//Include Template
require THEME.'header.php';
require THEME.'navigation.php';
?>
<div class="container">
	<div class="page-header">
		<h1><?php echo $page_name;?> <small><?php echo $page_slang;?></small></h1>
	</div>
	<div class="row scaffold-container">
		<div class="span16">
			New Template
		</div>
	</div>
<?php 
require THEME."footer.php";
?>
</div>