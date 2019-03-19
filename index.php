<?php
/*
- L'autoloader : Charge automatiquement une classe PHP même si dans le code cette dernières n'est
 pas incluse de façon précise.
- Système de routing par entonoir
*/
//L'ouverture de la session PHP
session_start();

function debug($value, $die = false, $type = 1) {
    if ($type == 1) {
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    } else {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }
    if ($die) {
        die();
    }
}

/* =====  L'AUTOLOADER  =====  */
function autoloader($class){
   $class = $class .".php";
   
   if( file_exists($class) ){
       include $class;
   }else if ( file_exists($class) ){
       include $class;
   }
}

spl_autoload_register("autoloader");
/* =====  LE SYSTEME DE ROUTING DES VUES  =====  */



//L'entonoir de requête HTTP
//On récupère uniquement l'URI de l'URL
$uri = substr(urldecode($_SERVER["REQUEST_URI"]), strlen(dirname($_SERVER["SCRIPT_NAME"])));
$uri = ltrim($uri, "/");//Supprime les caractères spéciaux , espaces et autres..
$uri = explode("?", $uri);
$uriExploded = explode("/", $uri[0]);


//Séparer l'URI via les '/' pour distinguer le contrôleur(c) et l'action de ce dernier(a)
//S'assurer qu'elles ne sont pas vides autrement c'est l'index qui nous redirigera.
$c = (empty($uriExploded[0]))?"index":$uriExploded[0];
$a = (empty($uriExploded[1]))?"index":$uriExploded[1];
//Suffixage des noms du contrôleur et de son action
$c = ucfirst(strtolower($c))."Controller";
$a = strtolower($a)	;



//Suppression de nom du C et de l'A pour garder slmt la valeur soumise /user/single/3 -> 3
unset($uriExploded[0]);
unset($uriExploded[1]);
$uriExploded = array_values($uriExploded);
//Listes des types de méthodes + URI
$params = ["POST"=>$_POST,"GET"=>$_GET,"URL"=>$uriExploded];

//Entonoir des fichiers , classes et des méthodes
if(file_exists("controller/".$c.".php")){

   include "controller/".$c.".php";
   
	$tt ="\controller\\" ;
	
	$tt = $tt. $c;

   if( class_exists($tt) ){
	   $objC = new $tt();
       if( method_exists($objC, $a) ){
           $objC->$a($params);
       }else{
           die("L'action ".$a." n'existe pas");
       }
   }else{
       die("Le controller ".$c." n'existe pas");
   }
}else{
   die("Le fichier ".$c." n'existe pas");
}