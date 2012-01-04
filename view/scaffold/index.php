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
	<div class="row scaffold-container">
		<div class="span16">
			<table class="zebra-striped">
				<thead>
					<tr>
						<td>File Name</td>
						<td>Created Date</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					
						<?php 
							//Here is your main location
							if(!empty($datalist)){
								foreach($datalist as $list){
									echo '<tr>';
									echo '<td style="text-transform:capitalize;">'.$list['file_name'].'</td>';
									echo '<td>'.$list['date'].'</td>';
									echo '<td><a href="newtemplate/?page='.$list['id'].'">Generate Template</a> | <a href="">Re-Create Scaffold</a></td>';
									echo '</tr>';
								}
							}else{
								echo '<tr>';
								echo '<td>No Data Found</td>';
								echo '<td>No Data Found</td>';
								echo '<td>No Data Found</td>';
								echo '</tr>';
							}
						?>
				</tbody>
			</table>
		</div>
	</div>
<?php 
require THEME."footer.php";
?>
</div>