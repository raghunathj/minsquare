<?php
/*
 * adMinSquare Database connection & normal query opertaion file
 * File moved to Core folder
 * version 0.5
 */
class db{
	private $connection;
	public $cdata;
	public function __construct(){
		$this->connection = null;
		$this->cdate = Date('d.m.Y h:i:s');//Used to add date along with the ERROR. But can be used for anything.
	}
	
	
	/*
	 * To create a connection between host and database
	 */
	public function connect(){
		$this->connection = mysql_connect(DBHOST,DBUSERNAME,DBPASSWORD);
		if(!$this->connection){
			echo 'con';
			throw new Exception("Unable to Connect Host. More Info >".mysql_errno());
		}else{
			if(!mysql_select_db(DBDATABASE,$this->connection)){
				error_log("DATE: ".$this->cdate."Unable to Connect Database.",3,ERRORLOG);
			}
		}
	}
	
	/*
	 * Function for Basic Query
	 * $table_name -> Specigy a table name
	 * $order_by -> ORDER BY a specific field in ASC or DESC order
	 */
	public function display($table_name,$order_by){
		if($this->connection){
			$query = "SELECT * FROM $table_name ORDER BY $order_by";
			$result = mysql_query($query);
			$result = $this->prepare_results($result,"array");
			if($result){
				return $result;
			}else{
			error_log("DATE: ".$this->cdate."SELECT query failed >".mysql_error(),3,ERRORLOG);
			}
		}else{
			error_log("DATE: ".$this->cdate."Unable to Connect Database.",3,ERRORLOG);
		}
	}
	
	
	/*
	 * Function to prepare the result into an array or assoc
	 */
	protected function prepare_results($result,$type){
		$res_array = array();
		$fetch_type = "mysql_fetch_".$type;
		for($count=0;$row = $fetch_type($result);$count++)
		{
		$res_array[$count] = $row;
		}
		return $res_array;
	} 
	
	/*
	 * Function to query Specific ID.
	 * $table_name -> Table to use
	 * $field -> to pull specific fields
	 * $where -> add a WHERE condition if required
	 * $count_status -> to get count data [True / False]
	 */
	
	public function display_selected($table_name,$field,$where,$count_status){
		if($this->connection){
			$result_array = array();
			$query = "SELECT $fields FROM $table $where";
			$result = mysql_query($query);
			$result = prepare_results($result,"assoc");
			$result_array['result'] = $result;
			if($count_status == true){
				$query = "SELECT COUNT(*) FROM $table $where";
				$result_2 = mysql_query($query);
				$result_array['count'] = $result_2;
			}
			if($result_array){
				return $result_array;
			}else{
			error_log("DATE: ".$this->cdate."SELECT query failed >".mysql_error(),3,ERRORLOG);
			}
		}else{
			error_log("DATE: ".$this->cdate."Unable to Connect Database.",3,ERRORLOG);
		}
	}
	
	
	
	
	
	
}
