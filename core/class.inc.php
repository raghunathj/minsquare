<?php
/*
 * To call classes required for the file
 * BETA
 */

class load{
	
	public function __construct(){
		//Nothing right now
	}
	
	
	/*
	 * Function used to call classes that are required.
	 */
	public function load_class($array){
		$class = $array;
		$count_class = count($class);
		$keys = array_keys($class);
		for($i=0;$i<$count_class;$i++){
			require_once( ABSPATH .$class[$keys[$i]].'/'.$keys[$i].'.inc.php' );
		}
	}
}