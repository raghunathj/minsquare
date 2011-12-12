<?php
/*
 * To call classes required for the file
 * BETA
 */

class call{
	
	public function __construct(){
		//Nothing right now
	}
	
	public function call_classes($array){
		$class = $array;
		while($classes = current($class)){
			if (isset($classes) ) {
				require_once( ABSPATH .key($class).'/'.current($class).'.inc.php' );
				$class_name = current($class);
				return new $class_name;
			}
		}
	}

}