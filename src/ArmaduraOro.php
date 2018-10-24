<?php 

namespace Skynet;

class ArmaduraOro implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 4;
	}
}
