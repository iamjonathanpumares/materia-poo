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

function debug($var)
{
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
	exit();
}

function slugify($text)
{
  // replace non letter or digits by -
  $text = preg_replace('~[^\pL\d]+~u', '-', $text);

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  // trim
  $text = trim($text, '-');

  // remove duplicate -
  $text = preg_replace('~-+~', '-', $text);

  // lowercase
  $text = strtolower($text);

  if (empty($text)) {
    return 'n-a';
  }

  return $text;
}