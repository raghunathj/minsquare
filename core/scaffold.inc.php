<?php
/*
 * Class file for auto scaffolding
 * Not a proper working version
 * For scaffolding the DB user should have permissions to read database and table names
 */
class scaffold{
	public $controller_path = 'controller';
	public $model_path = 'model';
	public $view_path = 'view';
	
	public function __construct(){
		//Nothing as of now
	}
	
	public function get_table_list($dbname,$default,$deep){
		if($default){
			//If true then use the current database that is added on config file
			$dbname = DBDATABASE;
		}
		$result = mysql_query("SHOW tables FROM ".$dbname);
		$tables = array();
		$q = 0;
		$v = 0;
		while ($row = mysql_fetch_array($result)) {
			//Fetch all table 
			$tables['tables'][$q] = array("table_name" => $row[0]);
				//If you want to pull more details for the table then set as true
				if($deep){
					//This is to fetch fields
					$query_level = mysql_query("SHOW columns FROM ".$row[0]);
					if($query_level){
						$fields = array();
						while($fields = mysql_fetch_array($query_level)){
							$tables['tables'][$q]['table_fields'][$v] = $fields;
							$v++;
						}
					}
				}
			$q++;
		}	
		return $tables;
	}
	
	/*'
	 * Function to create file
	 */
	public function create($filename,$table_name){
		
	}
	
	/*
	 * Quick Form
	 */
	public function quick_create($filename,$tablename){
		//Check if the filename exist
		/*
		 * @result - 1 > Success, 2 > Something Went Wrong, 3 > File already exist
		 */
		if((file_exists(ABSPATH .$controller_path.'/'.$filename.'.php'))&&(file_exists(ABSPATH .$model_path.'/'.$filename.'.php'))&&(file_exists(ABSPATH .$view_path.'/'.$filename.'.php'))){
			$response = 3;
			return $response;
		}else{
			$sfilehandel = fopen(ABSPATH .$controller_path.'/'.$filename.'.php', 'w') or die("can't open file");
			fclose($sfileHandle);
			$sfilehandel = fopen(ABSPATH .$model_path.'/'.$filename.'.php', 'w') or die("can't open file");
			fclose($sfileHandle);
			$sfilehandel = fopen(ABSPATH .$view_path.'/'.$filename.'.php', 'w') or die("can't open file");
			fclose($sfileHandle);
			$response = 1;
			return 1;
		}
	}
}