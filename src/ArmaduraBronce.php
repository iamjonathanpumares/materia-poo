<?php 

namespace Skynet;

class ArmaduraBronce implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 2;
	}
}
