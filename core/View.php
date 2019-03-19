<?php

namespace core;

class View{

	private $v;
	private $data = [];

	public function __construct($v="index"){
		
		$this->v = $v.".php";
		
		if( !file_exists("views/".$this->v) ){
            die("La vue : ".$this->v." n'existe pas");
		}

		// include "views/".$this->v;
	}
	
	public function __destruct(){
		global $a, $c;
		// debug($a);
		// debug($c,true);
		//["name"=>"Yves"]
		extract($this->data);
		//$name = "Yves"
		include_once( "views/".$this->v );
	}


}
