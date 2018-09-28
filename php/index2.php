<?php

namespace Foo\Bar;

require 'fichero1.php';
require 'fichero2.php';

function var_dump($tipo)
{
	echo 'Función var_dump <br>';
}

$foo = new FooBar();
echo $foo->foo;

var_dump('Hola');
\var_dump('Hola');
echo '<br>';

\Foo\Bar\subpespacio_de_nombres\foo();

?>