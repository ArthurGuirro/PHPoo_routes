<?php 

use app\core\Router;
use app\support\RequestType;
use app\support\Uri;

require '../vendor/autoload.php';

session_start();

//var_dump(RequestType::get());
//var_dump(Uri::get());
//echo  '';
//dd($_SERVER);


Router::run();

?>