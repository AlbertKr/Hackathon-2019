<?php

namespace controller;

use \core\View;
use \core\API;

class AccueilController {
	
	public function defaut(){
		
		$view = new View('accueil');
		$api = new API();
		$dataset = array();
		$i = 0; //Couleur
		//La liste des données pour les bulles D3js
		foreach($api->getMostMentionned()["ngrams"] as $data){
			$dataset[]= array("Name"=>$data["ngram"],"Count"=>$data["count_articles"] ,"Link"=>"www.google.com","Color"=>"#0054D".$i); 
			$i++;
		}
		//var_dump($api->getListByID());
		$view->assign("data",$api->getArticlesByQuery());
		$view->assign("dataset",$dataset);


		

	}
}
