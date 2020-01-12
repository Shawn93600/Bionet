<?php 
require_once "Utils/functions.php";
require_once "Models/Model.php";
require_once "Controllers/Controller.php";
$controllers = ["home", ""]; // Liste des controllers
$controller_default = "home"; // Controller par defaut
if( isset($_GET['controller']) and in_array($_GET['controller'], $controllers) ){
    $nom_controller = $_GET['controller'];
} else {
    $nom_controller = $controller_default;
}
$nom_classe = 'Controller_'. $nom_controller;
$nom_fichier = 'Controllers/'. $nom_classe .'.php';
if(file_exists($nom_fichier)){
    require_once $nom_fichier;
    $controller = new $nom_classe();
}
else
 die('Error 404: Not found');
