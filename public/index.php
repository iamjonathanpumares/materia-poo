<?php

ini_set('display_errors', 1);
ini_set('display_startup_error', 1);
error_reporting(E_ALL);

require '../src/helpers.php';

require '../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

// use Skynet\Soldado;
// use Skynet\ArmaduraBronce;
// use Skynet\Arquero;
// use Skynet\ArmaduraPlata;
use Aura\Router\RouterContainer;
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();

$map->get('jobs.index', '/jobs', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'index'
]);
$map->get('jobs.show', '/jobs/{id}', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'show'
])->tokens(['id' => '\d+']);
$map->get('jobs.create', '/jobs/create', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'create'
]);
$map->post('jobs.store', '/jobs/create', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'store'
]);
$map->get('jobs.edit', '/jobs/{id}/edit', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'edit'
]);
$map->post('jobs.update', '/jobs/{id}/edit', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'update'
]);
$map->get('jobs.delete', '/jobs/{id}/delete', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'delete'
]);
$map->post('jobs.destroy', '/jobs/{id}/delete', [
	'controller' => 'Skynet\Controllers\JobController',
	'action' => 'destroy'
]);

$map->get('users.index', '/users', [
	'controller' => 'Skynet\Controllers\UserController',
	'action' => 'index'
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
	http_response_code(404);
}
else
{
	foreach ($route->attributes as $key => $val) 
	{
	    $request = $request->withAttribute($key, $val);
	}
	$handlerData = $route->handler;
	$controllerName = $handlerData['controller'];
	$actionName = $handlerData['action'];
	$controller = new $controllerName;
	$response = $controller->$actionName($request);
	foreach ($response->getHeaders() as $name => $values) {
		foreach ($values as $value) {
			header(sprintf('%s: %s', $name, $value), false);
	     }
	}
	http_response_code($response->getStatusCode());
	echo $response->getBody();
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
