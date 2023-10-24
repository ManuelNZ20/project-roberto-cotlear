<?php

require_once '../vendor/autoload.php';
// require_once('config/database.php');
// uso de la libreria dotenv para cargar las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

define('DRIVER', $_ENV['DRIVER']);
define('HOST', $_ENV['HOST']);
define('USER', $_ENV['USER']);
define('PASS', $_ENV['PASS']);

define('BASE', $_ENV['BASE']);
define('PORT', $_ENV['PORT']);

?>