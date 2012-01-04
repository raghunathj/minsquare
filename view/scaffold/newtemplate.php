<?php 
/*
 * minsquare scaffold file.
 * Dont Change anything
 * This is placed in view
 */
//Load required classes


//Page Title
$page_title = "Scaffold - New Template";
$page_name = "Scaffold - New Template";
$page_slang = "Generate New Template";

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
		<?php 
		print_r($table_list);
		?>
			Please Select Database Table <select><option>test</option></select> for File <?php echo "<strong>FILE NAME</strong>" ;?>
		</div>
	</div>
<?php 
require THEME."footer.php";
?>
</div>