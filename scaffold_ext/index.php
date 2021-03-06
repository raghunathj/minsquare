<?php
/*
 * Scaffold User generation file
 */
include("../config/include_global.php");
//Load required classes
$core_class = array(
				"db" => "core",
				"scaffold" => "core"
			);
$load->load_class($core_class);
//Initialize and connect to database
$db = new db();
$db->connect();
$scaffold = new scaffold();
$message = (int)$_GET['error'];
$error_text = "";
$success_text = "";
switch($message){
	case 1: $success_text = "File Created Successfully";
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Generate Scaffold</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection" charset="utf-8" />
</head>
<body>
<div class="topbar">
	<div class="topbar-inner">
		<div class="topcontainer">
			<a class="sclogo" href="#">min<sup>2</sup> Scaffold tool</a>
		</div>
	</div>
</div>
	<div id="container">
		<div id="body">
			<h1>Scaffold version 1.0: Generate a MVC file</h1>
			<div class="successm"><?php echo $success_text;?></div>
			<div class="errorm"><?php echo $error_text;?></div>
			<?php 
					//Get table list
					$scaffold_tables = $scaffold->get_table_list("",true,false);
					if($scaffold_tables){
			?>
			<form action="createfile.php" method="POST">
				<p>1. Select a Table</p>
				<p>
				<select name="scaffold_table">
					<?php 
					$sc_count = count($scaffold_tables['tables']);
					for($i=0;$i<$sc_count;$i++){
					?>
					<option value="<?php echo $scaffold_tables['tables'][$i]['table_name'];?>"><?php echo $scaffold_tables['tables'][$i]['table_name'];?></option>
					<?php 
					}
					?>
					
				</select>
				</p>
				
				<p>2. Type a file name to create</p>
				<p><input type="text" name="scaffold_filename" /></p>
				<p>3. Hit submit to create the file in MVC folders</p>
				<p><input type="submit" name="scaffold_submit" value="Create"/>
				
			</form>
			<?php 
					}else{
						echo '<div class="errorm"><p>No Tables Found. Configure your database at config/config.inc.php file.</p></div>';
					}
			?>
			<p class="footer">Page rendered in <strong><?php echo MIN_START_MEM;?></strong> seconds. This works only on minsquare ver 1.0</p>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="js/scaffold.core.js" type="text/javascript"></script>
</body>
</html>