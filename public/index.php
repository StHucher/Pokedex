<?php

require __DIR__."/../vendor/autoload.php";

/*Set the router*/
$router = new AltoRouter();
$router->setBasePath($_SERVER['BASE_URI']);

/*Mapping roads*/
$router->map('GET', '/', 'MainController::list', 'home');
$router->map('GET', '/detail/[i:numero]', 'MainController::detail', 'detail');
$router->map('GET', '/types', 'MainController::types','types');
$router->map('GET', '/type/[i:type]', 'MainController::type','type');

/*Match the current request */

$match=$router->match();
/* var_dump($match); */

if($match !==false){
$controllerAndMethod = explode("::",$match['target']);

/*Definition of controller and method*/
$controllerName = "Pokedex\\Controllers\\".$controllerAndMethod[0];
$methodName = $controllerAndMethod[1];

$controller = new $controllerName;
$controller->$methodName($match['params']);

}else{
  $controller = new Pokedex\Controllers\MainController();
  $controllerName->notFound();
}