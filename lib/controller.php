<?php
 class controller{
 	
 	public $smarty;
 	function __construct(){
 		$this->smarty = new Smarty();
 		$this->smarty->setTemplateDir('theme/default');
 	}
 	
 }