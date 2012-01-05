<?php 
/*
 * minsquare scaffold file.
 * Dont Change anything
 * This is placed in view
 */

//Page Title
$page_title = "Scaffold - New Template";
$page_name = "Scaffold - New Template";
$page_slang = "Generate New Template";

/*
 * Core Files
 * Place Your Core files here if required
 */

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
			<div id="templatestep1">
				<?php
				$page = $page_data['result'][0];
				$tables = $table_list['tables'];
				if(!empty($tables)){
					$table_count = count($tables);
				?>
					<span class="label">Step 1</span><br/>Please Select Database Table 
					<select id="scaffold_table" name="scaffold_table">
					<?php 
					for($i=0;$i<$table_count;$i++){
					?>
					<option value="<?php echo $tables[$i]['table_name'];?>"><?php echo $tables[$i]['table_name'];?></option>
					<?php 
					}
					?>
					</select> 
					for File <?php echo '<strong style="text-transform:capitalize;">'.$page['file_name'].'</strong>' ;?> (<a href="<?php echo BASEURL;?>scaffold/">Change File</a>) and hit <a id="generatestructure" class="btn primary">Generate</a>
				<?php 
				}else{
				?>
				No Tables found.
				<?php 
				}
				?>
			</div>
			<div id="templatestep2">
				<?php 
					
				?>
			</div>
		</div>
	</div>
<?php 
require THEME."footer.php";
?>
</div>
<script>
	$(document).ready(function(){
		var base_url = '<?php echo BASEURL;?>';
		$("#generatestructure").live("click",function(){
			var scaffold_table = $("#scaffold_table").val();
			var dataString = "tablename="+scaffold_table;
			$.ajax({
				type: 'POST',
				url: base_url+'scaffold/scaffoldstructure/',
				data: dataString,
				cache: false,
				context:document.body,
				success: function(html){
					console.log(html);
				}
			});
			
		});
	});
</script>