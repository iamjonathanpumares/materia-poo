<?php

namespace Skynet;

class Arquero extends Unidad
{
	protected $damage = 20;

	public function atacar(Unidad $oponente)
	{
		show("{$this->name} dispara flechas hacia {$oponente->getName()}");

		$oponente->takeDamage($this->damage);
		
	}

	public function takeDamage($damage)
	{
		if (rand(0, 1))
		{
			parent::takeDamage($damage);
		}	
	}
}
