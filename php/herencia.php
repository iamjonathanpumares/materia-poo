<?php

function show($mensaje)
{
	echo "<p>$mensaje</p>";
} 

spl_autoload_register(function ($className) {
	require "src/$className.php";
});

interface Armadura
{
	public function absorberDamage($damage);
}

class ArmaduraBronce implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 2;
	}
}

class ArmaduraPlata implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 3;
	}
}

class ArmaduraOro implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 4;
	}
}

// $armadura = new ArmaduraBronce();
$soldado = new Soldado('abraham', new ArmaduraBronce());
// $soldado->move('el norte');

$arquero = new Arquero('rodrigo');
$arquero->atacar($soldado);
// $armadura_plata = new ArmaduraPlata();
$soldado->setArmadura(new ArmaduraPlata());
$arquero->atacar($soldado);

$soldado->atacar($arquero);

