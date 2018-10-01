<?php

class Usuario
{
	// Propiedades, atributos o caracteristicas
	protected $first_name; // public, protected, private
	protected $last_name;

	// Constructor
	public function __construct($first_name, $last_name)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}

	// Métodos o comportamiento
	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setFirstName($first_name)
	{
		$this->first_name = $first_name;
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function setLastName($last_name)
	{
		$this->last_name = $last_name;
	}

	function getFullName()
	{
		echo "{$this->first_name} {$this->last_name}";
	}
}

$usuario1 = new Usuario('Jonathan', 'Pumares');

$usuario1->setFirstName('Abraham');
$usuario1->setLastName('Gutierrez');

$usuario1->getFullName();