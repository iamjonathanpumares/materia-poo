<?php 

function show($mensaje)
{
	echo "<p>$mensaje</p>";
}

function conectar()
{
	try {
		$conexion = new PDO('mysql:host=localhost;dbname=poo', 'root', '');

		return $conexion;

	} catch (PDOException $e) {
		exit('Error: ' . $e->getMessage());
	}
}