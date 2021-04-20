<?php
session_start();
require_once('system/config.php');
require_once('system/Bootstrap/Autoload.php');
$autoload=new \System\Bootstrap\Autoload();
$autoload->autoloader();
$router=new \System\Router\Routing();
$router->run();