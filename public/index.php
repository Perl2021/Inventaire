<?php
require '../config/dev.php';
require '../vendor/autoload.php';
// ceci est le point d'entrée vers toutes les pages). elle instancie la classe routeur qui va se charger des redirections
session_start();
$router = new App\config\Router();
$router->run();