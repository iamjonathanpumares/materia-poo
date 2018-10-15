<?php 

class Soldado extends Unidad
{
	protected $damage = 40;
	protected $armadura;

	public function __construct($name, Armadura $armadura = null)
	{
		$this->armadura = $armadura;
		parent::__construct($name);
	}

	public function setArmadura(Armadura $armadura)
	{
		$this->armadura = $armadura;
	}

	public function atacar(Unidad $oponente)
	{
		show("{$this->name} dispara balas hacia {$oponente->getName()}");

		$oponente->takeDamage($this->damage);
	}

	public function takeDamage($damage)
	{
		if ($this->armadura)
		{
			$damage = $this->armadura->absorberDamage($damage);
		}

		parent::takeDamage($damage);
	}
}