<?php

function show($mensaje)
{
	echo "<p>$mensaje</p>";
} 

abstract class Unidad
{
	protected $vida = 40;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function move($destino)
	{
		show("{$this->name} se mueve hacia $destino");
	}

	abstract public function atacar($oponente);
}

class Soldado extends Unidad
{
	public function atacar($oponente)
	{
		show("{$this->name} dispara balas hacia $oponente");
	}
}

class Arquero extends Unidad
{
	public function atacar($oponente)
	{
		show("{$this->name} dispara flechas hacia  $oponente");
	}
}

$soldado = new Soldado('jepumares');
$soldado->move('el norte');
$soldado->atacar('abraham');

$arquero = new Arquero('rodrigo');
$arquero->atacar('martin');

