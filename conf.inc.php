<?php
/*
  conf.inc.php
  Contient les paramètres nécessaires pour se connecter à ressources externes(Base de données,
  Serveur SMTP,..)
  
*/
//Paramètres de connexion à la BD
define("","root");
define("","");
define("","localhost");
define("","good-food");
define("","");
define("DS", "/");

//
$scriptName = (dirname($_SERVER["SCRIPT_NAME"]) == "/")?"":dirname($_SERVER["SCRIPT_NAME"]);
define("DIRNAME", $scriptName.DS);