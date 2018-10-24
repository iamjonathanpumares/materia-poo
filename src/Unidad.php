<?php 

namespace Skynet;

abstract class Unidad
{
	protected $vida = 40;
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getVida()
	{
		return $this->vida;
	}

	public function setVida($puntos)
	{
		$this->vida = $puntos;

		show("{$this->name} ahora tiene {$this->vida} puntos de vida");
	}

	public function move($destino)
	{
		show("{$this->name} se mueve hacia $destino");
	}

	abstract public function atacar(Unidad $oponente);

	public function die()
	{
		show("{$this->name} muere");
	}

	public function takeDamage($damage)
	{
		$this->vida = $this->vida - $damage;

		show("{$this->getName()} tiene {$this->vida} puntos de vida");

		if ($this->vida <= 0)
		{
			$this->die();
		}
	}
}
