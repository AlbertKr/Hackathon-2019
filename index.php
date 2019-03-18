<?php

ob_start();

// Chemin absolu *** ROOT => racine du dossier ***
define('ROOT', realpath(__DIR__).DIRECTORY_SEPARATOR);

// Mise en forme de la date
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, 'fr_FR', 'fra');

// Acquisition paramètres URL
$controllerName = ucfirst($_GET['controller']);
$methodName = $_GET['method'];

/* ------ METHODES DE BASE ------ */
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

// Préchargement des dépendances des fichiers
function myAutoload($class){
	//charge automatiquement les classes lors de l'invocation
	$className = str_replace("\\", "/", $class);
	if (file_exists($className . '.php')) {
		require_once "$className.php";		
		return true;
	}
	return false;
}
spl_autoload_register('myAutoload');

function displayError($err){
    if( defined( DISP_ERROR )){	
		if( DISP_ERROR == 'ERR' ){
			echo '<fieldset style="width: 66%;">
			  <legend><b>[</b>PHP PDO Error ' . strval($err->getCode()) . '<b>]</b></legend>
			  <table border="0">
					<tr>
						<td align="right"><b>Message:</b></td>
						<td>' . $err->getMessage() . '</td>
					</tr>
					<tr>
						<td align="right"><b>Code:</b></td>
						<td>' . strval($err->getCode()) . '</td>
					</tr>
					<tr>
						<td align="right"><b>File:</b></td>
						<td>' . $err->getFile() . '</td>
					</tr>
					<tr>
						<td align="right"><b>Line:</b></td>
						<td>' . strval($err->getLine()) . '</td>
					</tr>
				</table>
				</fieldset>';
		}
	}
}

// Définition de la source de la class
$controllerClass = "/controller/$controllerName";
if(!file_exists( $controllerClass.'.php' )){
	$controllerClass = "/controller/$controllerName";
}

session_start();

try{
	$class = new ReflectionClass(str_replace('/','\\', $controllerClass));
	$instance = $class->newInstance();
	$method = $class->getMethod($methodName);
	$method->invoke($instance);
} catch (Exception $err){
	echo 'Erreur';
	exit();
}