<?php

use Skynet\Soldado;
use Skynet\ArmaduraBronce;
use Skynet\Arquero;
use Skynet\ArmaduraPlata;

require 'src/helpers.php';

spl_autoload_register(function ($className) {
	
	$className = str_replace('Skynet\\', '', $className);
	// show($className);
	if (file_exists("src/$className.php"))
	{
		require "src/$className.php";
	}
});

// $armadura = new ArmaduraBronce();
$soldado = new Soldado('abraham', new ArmaduraBronce());
// $soldado->move('el norte');

$arquero = new Arquero('rodrigo');
$arquero->atacar($soldado);
// $armadura_plata = new ArmaduraPlata();
$soldado->setArmadura(new ArmaduraPlata());
$arquero->atacar($soldado);

$soldado->atacar($arquero);
