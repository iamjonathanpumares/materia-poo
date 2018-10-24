<?php

namespace Foo\Bar;

use Foo\Bar\subpespacio_de_nombres\Foo;

class FooBar extends Foo
{
	public static function metodo_estatico()
	{
		echo 'Clase Foo del fichero2.php <br>';
	}
}

function foo()
{
	echo 'namespace Foo\Bar del fichero2.php <br>';
}

