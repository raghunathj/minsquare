<?php
/*
 * Router file
 */

class router{
	
	public $request_uri_parts=array();
	public $controller;
	public $action;
  	public $params=array();
  	public $controller_path = 'controller';
  	
  	function __construct($web_folder,$default_controller,$default_action)  {
  		
  		$this->default_controller = $default_controller;
  		$this->default_action = $default_action;
  		$this->webfolder = $web_folder;
  		
  	}
  	
  	//To get the URL page request
  	function url_request(){
  		$url = $_SERVER['REQUEST_URI'];
		if(strpos($url, $this->webfolder)===0)
			$url = substr($url,strlen($this->webfolder));
		$this->request_uri_parts = $url ? explode('/',$url) : array();
		return $this;
  	}
  	
  	//To Identify Controller Name, Actions and its Parameters
  	function parse_url(){
  		//Initialize empty array
  		$this->params = array();
  		$p = $this->request_uri_parts;
	    if (isset($p[0]) && $p[0] && $p[0][0]!='?')
	      $this->controller=$p[0];
	    if (isset($p[1]) && $p[1] && $p[1][0]!='?'){
	      $this->action=$p[1];
	    }else{
	    	array_push($p,$p[1]);
	    	$this->action = 'index';
	    }
	    if (isset($p[2]))
	      $this->params=array_slice($p,2);
	    return $this;
  	}
  	
  	//To route a file
  	function route_request(){
  		$controller_location = $this->controller_path.'/'.$this->controller.'.php';
  		if(!file_exists($controller_location))
  			echo "Unable To Find the File";
  		require($controller_location);
  		$controller_name = 'min_'.$this->controller.'_controller';
  		$con = new $controller_name;
  		$function = $this->action;
  		call_user_func( array( $con, $function ) );
  		return $this;
  	}
	
}