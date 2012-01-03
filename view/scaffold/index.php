<?php 
/*
 * minsquare scaffold file.
 * Dont Change anything
 * This is placed in view
 */
//Load required classes


//Page Title
$page_title = "Scaffold";
$page_name = "Scaffold";
$page_slang = "Generate Pages";

//Core files

//Include Template
require THEME.'header.php';
require THEME.'navigation.php';
?>
<div class="container">
	<div class="page-header">
		<h1><?php echo $page_name;?> <small><?php echo $page_slang;?></small></h1>
	</div>
	<div class="scaffold-container">
		<?php 
			//Here is your main location
		?>
	</div>
<?php 
require THEME."footer.php";
?>
</div>