<?php 

namespace Skynet;

class ArmaduraPlata implements Armadura
{
	public function absorberDamage($damage)
	{
		return $damage / 3;
	}
}

?>