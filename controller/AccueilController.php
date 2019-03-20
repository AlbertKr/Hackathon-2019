<?php

namespace controller;

use \core\View;
use \core\API;

class AccueilController {
	
	public function defaut(){
		
		$view = new View('accueil');
		$api = new API();
		$dataset = array();

		//La liste des données pour les bulles D3js
		foreach($api->getMostMentionned()["ngrams"] as $data){
			$dataset[]= array("Name"=>$data["ngram"],"Count"=>$data["count_articles"]); 
		}

		$view->assign("data",$api->getMostMentionned()["ngrams"]);
		$view->assign("dataset",$dataset);


		

	}
}
