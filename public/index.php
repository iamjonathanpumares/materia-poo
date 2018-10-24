<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require '../src/helpers.php';

require '../vendor/autoload.php';

// use Skynet\Soldado;
// use Skynet\ArmaduraBronce;
// use Skynet\Arquero;
// use Skynet\ArmaduraPlata;
use Aura\Router\RouterContainer;

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('jobs.create', '/jobs/create', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'create'
]);
$map->post('jobs.store', '/jobs/create', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'store'
]);

$matcher = $routerContainer->getMatcher();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$route = $matcher->match($request);

// echo '<pre>';
// var_dump($route->handler);
// echo '</pre>';

if (!$route)
{
	echo 'No se encontro la ruta';
}
else
{
	$handlerData = $route->handler;
	$controllerName = $handlerData['controller'];
	$actionName = $handlerData['action'];
	$controller = new $controllerName;
	$controller->$actionName($request);
}

// $armadura = new ArmaduraBronce();
// $soldado = new Soldado('abraham', new ArmaduraBronce());
// $soldado->move('el norte');

// $arquero = new Arquero('rodrigo');
// $arquero->atacar($soldado);
// $armadura_plata = new ArmaduraPlata();
// $soldado->setArmadura(new ArmaduraPlata());
// $arquero->atacar($soldado);

// $soldado->atacar($arquero);
