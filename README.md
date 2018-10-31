# Paradigmas de Programación

* Programación estructurada o secuencial
* Programación orientada a objetos: La programación orientada a objetos nos ayudará a estructurar mejor nuestros programas.

## Elementos y Características de la POO

Los **elementos** de la POO, pueden entenderse como los ***"materiales"*** que necesitamos para diseñar y programar un sistema, mientras que las **características**, podrían asumirse como las ***"herramientas"*** de las cuáles disponemos para construir el sistema con esos materiales.

### Elementos principales de la POO

Entre los elementos principales de la POO, podremos encontrar a:

#### Clases

Cuando nosotros pensamos en clases, estamos pensando en objetos del mundo real. Una clase es una plantilla o definición de algo.

Cada sistema va a abstraer la información del objeto dependiendo de las necesidades.

> Por convención se define una clase por archivo.

> Una regla de la POO es que el nombre de las clases comienza con la primera letra en mayuscula.

> Como una buena práctica en PHP lo mejor es tener dividido el código en diferentes archivos.

Las dos partes principales de las clases son:

##### Propiedades

Son aquellas cualidades o características que describen a nuestros objetos y se representan como variables.

##### Métodos

Los métodos son la acción o función que realiza un objeto y que cambia su estado sobre si mismo, es decir, sobre sus propiedades. Entendemos por función a realizar una tarea en concreta.

#### Objeto 

Una instancia es la representación concreta de la clase. Para que exista un objeto hay que crearlo, y este existe cuando se le asigna la memoria de la computadora a ese objeto.

### Características de la POO

#### Herencia

Una de las características más importantes de la programación orientada a objetos es la de la herencia. Ésta consiste en que, cuando una clase hereda a otra, obtiene por defecto todas sus propiedades (métodos y atributos), pudiendo definir algunas adicionales. Esto se expresa mediante la palabra clave extends y el nombre de la clase padre, al definir una clase hija que hereda de ésta.

> El método constructor nos permitirá inicializar valores por default, así como también pasar datos como parámetro al momento de inicializar un objeto.

> Todas las funciones que tienen __ antes del nombre de la función se conocen como métodos mágicos.

Las propiedades que tengan la visibilidad de privada no serán accesibles desde esta nueva clase, aunque seguirán existiendo dentro del objeto.

En cualquier momento podemos sobreescribir las propiedades del método padre, así como acceder directamente a las mismas mediante la palabra reservada parent .

Las clases pueden ser extensiones de otras clases. La clase extendida o derivada tiene todas las variables y funciones de la clase base (herencia) y lo que se agregue en la definición extendida.

Los métodos de herencia y sus miembros pueden ser evitados, redeclarándolos con el mismo nombre con el que los definió la clase padre, a menos que la clase padre haya definido un método como final.

Es muy conveniente utilizar require_once cuando queremos utilizar herencia e incluir clases que están en otros archivos.

Si tenemos propiedades con la palabra private en nuestra clase padre, desde nuestra clase hija no podremos acceder a esta propiedad, pero si queremos que siga siendo privada y que las clases hijas tengan acceso podemos usar la palabra clave protected.

#### Encapsulamiento

Es el nivel de visibilidad que queramos darle a alguna variable, para ello podemos utilizar los modificadores de acceso private, public y protected.

> PHP: Con la palabra reservada this estaremos haciendo referencia a la variable que pertenece a la clase.

> Python: Con la palabra reservada self estaremos haciendo referencia a la variable que pertenece a la clase.

#### Polimorfismo

El polimorfismo se refiere a que algo se puede comportar de varias formas, es decir, hacemos las acciones de diferente manera, pero la esencia es la misma.

Una persona, un perro, un pato, un pez puede realizar la acción de nadar, pero todos lo hacen de diferente forma.

Este concepto podemos aplicarlo de diferentes maneras dependiendo del lenguaje de programación, una manera de aplicarlo es la siguiente:

Dentro de nuestra clase hijo podemos sobrescribir algún método del padre, esto es un concepto que conocemos como polimorfismo. Lo que polimorfismo quiere decir es que tendremos un método que va a funcionar de acuerdo con su contexto donde es llamado.

* Varios tipos y diferentes formas de aplicarlos
* Comportamiento
* Métodos y Herencia

##### Sobreescritura de métodos

Cuando queremos modificar el comportamiento de algún método de nuestra clase padre dentro de nuestra clase hijo se le llama como sobreescritura de métodos.

## Métodos mágicos

Son aquellos métodos que permiten 

# Herramientas a utilizar

* Python 3
* Entorno de desarrollo para PHP (XAMMP, MAMP, WAMP, etc.)
* IDE o editor de código

# Buenas prácticas al escribir código

* PHP-FIG

* PEP 8

# Módulos, paquetes y namespaces

En Python, cada uno de nuestros archivos .py se denominan **módulos**. Estos, módulos, a la vez, pueden formar parte de **paquetes**. Un paquete, es una carpeta que contiene archivos .py. Pero, para que una carpeta pueda ser considerada un paquete, debe contener un archivo de inicio llamado **__init__.py**. Este archivo, no necesita contener ninguna instrucción.

Los paquetes, a la vez, también pueden contener otros sub-paquetes.

Y los módulos, no necesariamente, deben pertenecer a un paquete.

## Importando módulos enteros

El contenido de cada módulo, podrá ser utilizado a la vez, por otros módulos. Para ello, es necesario **importar los módulos** que se quieren utilizar. Para importar un módulo, se utiliza la instrucción **import**, seguida del nombre del paquete (si aplica) más el nombre del módulo (sin el .py) que se desee importar.

> Python tiene sus propios módulos, los cuales forman parte de su librería de módulos estándar, que también pueden ser importados.

## Namespaces

Para **acceder** (desde el módulo donde se realizó la importación), a cualquier elemento del módulo importado, se realiza mediante el **namespace**, seguida de un punto (.) y el nombre del elemento que se desee obtener.

### Alias

Es posible también, abreviar los namespaces mediante un "alias". Para ello, durante la importación, se asigna la palabra clave **as** seguida del alias con el cuál nos referiremos en el futuro a ese namespace importado.

Luego, para acceder a cualquier elemento de los módulos importados, el namespace utilizado será el alias indicado durante la importación.

### Importar módulos sin utilizar namespaces

En Python, es posible, también, importar de un módulo solo los elementos que se desee utilizar. Para ello se utiliza la instrucción from seguida del namespace, más la instrucción import seguida del elemento que se desee importar.

Es posible también, importar más de un elemento en la misma instrucción. Para ello, cada elemento irá separado por una coma (,) y un espacio en blanco.

Pero **¿qué sucede si los elementos importados desde módulos diferentes tienen los mismos nombres?** En estos casos, habrá que **prevenir fallos, utilizando alias para los elementos**.

> PEP 8: importación La importación de módulos debe realizarse al comienzo del documento, en orden alfabético de paquetes y módulos. Primero deben importarse los módulos propios de Python. Luego, los módulos de terceros y finalmente, los módulos propios de la aplicación. Entre cada bloque de imports, debe dejarse una línea en blanco.

# Modelo de diseño con Lenguaje Unificado de Modelado: UML

El Lenguaje Unificado de Modelado (UML, por sus siglas en inglés) puede ayudarte a modelar sistemas de diversas formas.

## Diagramas UML

### Diagrama de clases

Uno de los tipos más populares en el UML es el diagrama de clases. Popular entre los ingenieros de software para documentar arquitectura de software, los diagramas de clases son un tipo de diagrama de estructura porque describen lo que debe estar presente en el sistema que se está modelando.

#### Beneficios de los diagramas de clases

Los diagramas de clases ofrecen una serie de beneficios para toda organización. Usa los diagramas de clases UML para:

* Ilustrar modelos de datos para sistemas de información, sin importar qué tan simples o complejos sean.

* Comprender mejor la visión general de los esquemas de una aplicación.

* Expresar visualmente cualesquier necesidades específicas de un sistema y divulgar esa información en toda la empresa.

* Crear diagramas detallados que resalten cualquier código específico que será necesario programar e implementar en la estructura descrita.

* Ofrecer una descripción independiente de la implementación sobre los tipos empleados en un sistema que son posteriormente transferidos entre sus componentes.

#### Componentes básicos de un diagrama de clases

El diagrama de clases estándar está compuesto por tres partes:

* Sección superior: Contiene el nombre de la clase. Esta sección siempre es necesaria, ya sea que estés hablando del clasificador o de un objeto.

* Sección central: Contiene los atributos de la clase. Usa esta sección para describir cualidades de la clase. Esto solo es necesario al describir una instancia específica de una clase.

* Sección inferior: Incluye operaciones de clases (métodos). Esto está organizado en un formato de lista. Cada operación requiere su propia línea. Las operaciones describen cómo una clase puede interactuar con los datos.

##### Modificadores de acceso a miembros

Todas las clases poseen diferentes niveles de acceso en función del modificador de acceso (visibilidad). A continuación te mostramos los niveles de acceso con sus símbolos correspondientes:

* Público (+)
* Privado (-)
* Protegido (#)
* Estático (subrayado)

# ¿Qué es PHP?

PHP es un lenguaje de programación de propósito general de alto nivel que fue diseñado especialmente para el desarrollo de aplicaciones web.

Es interpretado, multiplataforma, open source, el cual ha sido muy popular en los últimos años.

## ¿Qué NO es PHP?

* No es un lenguaje compilado, por lo cual siempre tendrás que llevar juntos tu código y tu interprete.
* No esta diseñado para realizar aplicaciones de escritorio.

Para trabajar con PHP instalaremos un entorno de desarrollo llamado XAMPP, no es un entorno pensado para producción.

# Sintaxis de PHP

Hagamos el ejemplo más sencillo para trabajar con PHP. Siempre que usemos PHP usaremos lo siguiente: <?php ?> todo lo que pongamos dentro de esto será lo que el servidor va a interpretar como código php, lo que esté fuera lo ignorará.

Para acceder a él lo haremos localhost:8080/hello.php porque el servidor abre por defecto el archivo index y nuestro nuevo archivo se llama hello.php.

Si queremos escribir código php en nuestra vista HTML tendremos que cambiarle la extensión al archivo por .php porque nuestro servidor esta configurado a solo interpretar archivos PHP. Solo las partes dentro de <?php ?> van a ser interpretadas y su código fuente no será visible desde el navegador.

Todas las sentencias de código se separarán con un ; (punto y coma).

# Variables, tipos de datos y cadenas

Una variable puede ser una pequeña cajita en la que puedes almacenar un valor y este lo pueden usar para realizar alguna operación.

Para declararla usaremos el símbolo de $ y en seguida el nombre, este puede ser un _ o una letra.

PHP no es estáticamente tipado, es decir que no tenemos que decirle qué tipo de dato es esa variable. Además, es débilmente tipado porque podemos fácilmente cambiar el tipo de dato, es decir PHP ejecuta una conversión de datos interna.

Al momento de trabajar con PHP una cosa muy importante es hacer debugging a nuestras variables, para ello utilizamos la función var_dump(); pasándole por parámetro la variable a revisar.

En PHP tenemos dos tipos de cadenas, las que son con comillas simples y las de comillas dobles. La diferencia entre estas dos cadenas es que la de comillas simples recibe de forma literal lo que le escribas mientras que la de comillas dobles intenta interpretar cualquier variable dentro de ella.

# Tipos de Datos en PHP

PHP cuenta con muchos tipos de datos, sin embargo, en este momento nos vamos a enfocar en los más importantes y utilizados que son boolean, integer, float, string, array y NULL.

## Tipos escalares:

* boolean:

Representa solamente un valor verdadero o falso. 
[http://php.net/manual/es/language.types.boolean.php](http://php.net/manual/es/language.types.boolean.php)
Valores válidos: true (verdadero) false (falso)

```
<?php
$a = true; 
$b = false; 
?>
```

* Integer:

Representa un número entero positivo, negativo o 0. 
[http://php.net/manual/es/language.types.integer.php](http://php.net/manual/es/language.types.integer.php)

```
<?php
$a = -123;
$b = 0;
$c = 7763;
?>
```

* float o double:

Representa un número de punto flotante, existen problemas de precisión con los números flotantes debido a la naturaleza binaria de las computadoras. 
[http://php.net/manual/es/language.types.float.php](http://php.net/manual/es/language.types.float.php)

```
<?php
$a = 12.24; 
$b = 1.5e3; 
$c = 7E-10;
?>
```

* string:

– Representa una cadena de caracteres.
– Existen 4 formas de representar una cadena. Las 2 principales son usando comillas simples o comillas dobles.
---- Usando comillas simples donde el texto será exactamente como se escribe.
---- Usando comillas dobles permite usar caracteres de escape y además expanden los nombres de las variables, es decir sustituye el valor de las variables dentro de las cadenas.

– Hay 2 formas adicionales llamadas Heredoc y Nowdoc que sirven para crear cadenas de múltiples líneas.

Si quieres conocer más de este tipo de dato da [click aquí](http://php.net/manual/es/language.types.string.php#language.types.string.details).

## Tipos compuestos

* array:

Representa una colección de valores, aunque por defecto PHP usara índices numéricos, la realidad es que la estructura se representa como un mapa que colecciona pares llave-valor. La sintaxis para definir un arreglo será a partir de corchetes cuadrados, aunque en versiones anteriores de PHP era necesario usar la función array(). Las llaves pueden ser enteros o cadenas y los valores pueden ser de cualquier tipo de PHP, incluso de tipo array. 
[http://php.net/manual/es/language.types.array.php](http://php.net/manual/es/language.types.array.php)

```
<?php
$array = array(
    "curso1" => "php",
    "curso2" => "js",
);

// a partir de PHP 5.4
$array = [
    "curso1" => "php",
    "curso2" => "js",
];

// índices numéricos
$array = [
    "php",
    "js",
];
?>
```

* object:

Representa una instancia de una clase. Este tema lo vimos más a fondo en la clase de Programación Orientada a Objetos.

```
<?php
class Car
{
    function move()
    {
        echo "Going forward..."; 
    }
}

$myCar = new Car();
$myCar->move();
?>
```

* callable:
Es un tipo de dato especial que representa a algo que puede ser “llamado”, por ejemplo una función o un método.

```
<?php
// Variable que guarda un callable
$firstOfArray = function(array $array) {
    if (count($array) == 0) { return null; }
    return $array[0];
};

// Este es nuestro arreglo
$values = [3, 2, 1];

// Usamos nuestro callable y se imprime el valor 3
echo $firstOfArray($values);
?>
```

* iterable:

A partir de PHP 7.1 iterable es un pseudo tipo de datos que puede ser recorrido.

```
<?php

function foo(iterable $iterable) {
    foreach ($iterable as $valor) {
        // ...
    } 
}

?>
```

## Tipos especiales

* resource:

Es un tipo de dato especial que representa un recurso externo, por ejemplo un archivo externo a tu aplicación.

```
<?php
$res = fopen("c:\\dir\\file.txt", "r");
?>
```

* NULL:

Es un valor especial que se usa para representar una variable sin valor. 
[http://php.net/manual/es/language.types.null.php](http://php.net/manual/es/language.types.null.php)

```
<?php
$a = null; 
?>
```

# Arreglos

Como vimos en la clase anterior almacenamos datos en una variable, ahora trataremos de almacenar más datos en una misma variable.

Estas variables que almacenan más de un dato se conocen como arreglos y su sintaxis se va a indicar con corchetes.

PHP utiliza índices para localizar a los elementos dentro de la variable.

La estructura de arreglos en PHP es conocida como mapa, lo que quiere decir que tiene una composición de llave valor. Además, un arreglo puede contener más arreglos y cada uno de ellos seguirá la misma estructura.

Algo que debes saber es que en PHP podrás almacenar diferentes tipos de datos en un mismo arreglo.

# Condicionales

Las condiciones nos permiten tomar decisiones en el código, si se cumple la condición entonces se ejecutarán ciertas instrucciones sino se cumple se ejecutarán otras. Estas se denotan por la instrucción if else.

```
$var1 = 1;

if($var1 > 0) {
  echo'es mayor que 2';
} 
else {
  echo'no es mayor que 2';
}
```

# Ciclos

Los ciclos o bucles son de total importancia cuando desarrollamos software pues nos permiten repetir un bloque de acciones y en consecuencia re-utilizar mejor nuestro código.

Funcionan de la mano con las condiciones, en este caso si se cumple la instrucción se estará ejecutando repetidas veces una instrucción dada.

## Do while

```
$idx = 0;
do {
  echo $idx;
  $idx++;
} while($idx < 3);
```

El ciclo do while garantiza que el código interno se ejecutará al menos 1 vez.

## While

```
$idx = 0;
while ($idx < 3) {
 echo $idx;
 $idx++;
}
```

En el ciclo while si la condición es falsa desde un inicio, es posible que el ciclo nunca se ejecute.

## For

```
for($idx = 0; $idx < 3; $idx++) {
  echo $idx;
}
```

## Foreach

El ciclo foreach nos brinda una solución simple para iterar sobre los valores de un arreglo, la sintaxis es la siguiente:

```
$array = ['uno', 'dos', 'tres']
foreach ($array as $valor) {
  echo $valor;
}
```

En esta sintaxis nos encontramos con 4 partes:

* La palabra reservada foreach simplemente indica el inicio de nuestro bloque.
* Dentro de paréntesis se escribe el nombre del arreglo que vamos a estar iterando, este arreglo debe estar definido previamente, en este ejemplo es $arreglo.
* La palabra "as" seguido de un nombre de variable que usaremos para acceder al elemento del arreglo que estamos accediendo, esta variable no debe existir previamente y solo la podrán usar dentro de este bloque. En el ejemplo es $valor.
* Entre llaves "{ }" están todas las acciones que queremos repetir, en el momento en que se ejecute el ciclo la variable que definimos para iterar (en el ejemplo $valor) ya existe y podrá ser usada en esta sección, piensa que el valor de esta variable estará cambiando en cada iteración.

Suponiendo que en el ejemplo anterior, el ciclo se repetirá 3 veces y en cada iteración la variable $valor contendrá el elemento del arreglo correspondiente, es decir, en la primera iteración $valor será igual a ‘uno’, en la segunda $valor será igual a ‘dos’ y en la tercera $valor será igual a ‘tres’.

Existe una sintaxis alternativa que nos permite no solo conocer el valor, también nos permitirá conocer la llave, de este modo tendremos acceso tanto a la llave como al valor del elemento del arreglo:

```
foreach ($array as $llave => $valor) {
  //sentencias que pueden usar $llave y $valor
}
```

# Repaso de que es la herencia

* Como podemos usar la herencia (mostrar el ejemplo de duplicación de código y como podemos resolverlo con la herencia)

* Mostrar que podemos usar la sobreescritura de métodos a través de la herencia (Cada clase hija ataca de manera diferente)

* Mostrar que son las clases abstractas y como podemos identificarlas

# Mostrar la interacción con objetos

Por el momento estamos pasando una cadena a nuestro método atacar pero nosotros necesitamos interactuar con un oponente, es decir, con un objeto que extienda de la clase Unidad. Se puede dar el caso de que el programador intente pasar al método atacar una cadena, por lo cual esto daría un error, ya que necesitamos pasar un objeto, pero podemos forzar de que esto suceda, de que el programador tenga que pasar una instancia de la clase Unidad o clases hijas y así asegurar de que el parametro que le pasamos a nuestro método sea un objeto.

Ahora vamos a complicar un poco más el ejemplo y vamos a suponer que nuestro objeto de la clase Unidad tiene ciertos puntos de vida y cada clase hija produce ciertos puntos de daño al oponente. Cuando estamos aprendiendo POO nos quedamos con el paradigma de la programación estructurada y por lo cual todo lo queremos resolver de esa manera. (Crear los métodos get y set de la propiedad vida en la clase Unidad)

Vamos a suponer que un soldado absorbe la mitad del daño del oponente por lo tanto estamos resolviendo este caso con condicionales y por consecuente con el paradigma de la programación estructurada, porque podemos complicar más nuestro ejemplo y ya no solamente tener soldados y arqueros, sino igual caballeros, magos, etc.

Cuando trabajamos con la POO, nosotros más bien necesitamos indicarle al objeto que hacer, dandole un comando. (Crear el método takeDamage a la clase Unidad y poner la lógica para recibir daño en ese método)

Ahora como ya vimos que podemos sobreescribir métodos en una clase hija y personalizar su comportamiento y como dijimos que nuestro soldado absorbe la mitad del daño, podemos modificar su comportamiento y a la vez llamar al método de nuestra clase padre.

Vamos a modificar igual el comportamiento del método takeDamage en nuestra clase Arquero y decimos que un arquero puede evadir un ataque.

> Ejercicio. Ahora requerimos que haya soldados con una armadura de plata que absorbe la tercera parte del daño y soldados con armadura de oro que absorbe la cuarta parte del daño que hace el oponente. Como resolveriamos eso con POO y con los conocimientos ya mostrados?

Mostrar las dos posibles soluciones de como podemos resolver el ejercicio planteado.

# Polimorfismo e Interfaces

Así como un soldado y un arquero son clases, entonces una armadura puede ser igual una clase de nuestro sistema. Y que acción realiza la armadura, absorber el daño que hace el oponente, así que vamos a crear nuestra clase Armadura con un método absorbDamage que por defecto absorberá la mitad del daño del oponente.

Pero aún no hemos resuelto el ejercicio en el que planteamos que tenemos distintas armaduras. Para ello vamos a utilizar de las interfaces que son como un contrato, porque nos obliga a implementar los métodos que en esa interfaz fueron declarados.

# Autocarga de clases y nombres de espacio con PHP

Ahora vamos a organizar nuestro código de una mejor manera, habiamos hablado de los PSR's (PHP Standard Recommendations), y una de las buenas prácticas en PHP es organizar una clase por archivo.

Para ello vamos a crear una carpeta llamada src que significar source, es decir, todo nuestro código fuente de nuestro sistema y tener un archivo index.php, que es nuestro archivo principal.

Ahora si nos damos cuenta nuestro código esta mejor ordenado, sin embargo tenemos otro detalle, y es la cantidad de require que tenemos en nuestro archivo index.php, pero PHP nos ayuda con eso que es llamado la autocarga de clases.

Por esa razón es importante manejar un estandar en donde el nombre de la clase es el nombre del archivo(Mostrar que pasaría si cambiamos el nombre del archivo por otro diferente al nombre de la clase).

Tenemos otro detalle cuando trabajamos con POO, podemos utilizar librerias de terceros, en donde el nombre de sus clases coinciden con el nombre de nuestras clases.

La solución que se utilizaba anteriormente es utilizar un prefijo a nuestras clases. Sin embargo, eso genera nombres de clases demasiados largos, para ello tenemos de los namespaces.

# Formularios

Los formularios nos permiten enviar datos desde el cliente (navegador) al servidor, procesarlos y almacenar esa información en una base de datos.

Vamos ahora a construir un formulario con HTML y veremos cada detalle del mismo.

Podemos enviar información desde un formulario a través de diferentes métodos, GET o POST. Para acceder a esta información desde PHP llamaremos a `$_GET` y `$_POST`, estas son variables super globales.

Recuerda que para hacer debugging de una variable usamos la función var_dump.

# MVC (Modelo Vista Controlador) en PHP

## ¿Que es el patrón MVC?

El patrón de diseño (de software) MVC se encarga de separar la lógica de negocio de la interfaz de usuario y es el mas utilizado en aplicaciones web, framework, etc, ya que facilita la funcionalidad, mantenibilidad, y escalabilidad del sistema, de forma comoda y sencilla, a la vez que ayuda no mezclar lenguajes de programación en el mismo código, el conocido “código espagueti”.
MVC divide las aplicaciones en tres niveles de abstracción:

1. Modelo: es el responsable de gestionar los datos. Es decir las clases y métodos que se comunican directamente con la base de datos.
2. Vista: es la encargada de mostrar la información al usuario, con de forma gráfica y legible.
3. Controlador: el intermediario entre la vista y el modelo, se encarga de controlar las interacciones del usuario en la vista, pide los datos al modelo y los devuelve de nuevo a la vista para que esta los muestre al usuario. Es decir las llamadas a clases y métodos, y los datos recibidos de formularios.

## ¿Como funciona el MVC?

El funcionamiento básico del patrón MVC, puede resumirse en:

1. El usuario realiza una petición.
2. El controlador captura la petición.
3. Hace la llamada al modelo correspondiente.
4. El modelo sera el encargado de interactuar con la base de datos.
5. El controlador recibe la información y la enviá a la vista.
6. La vista muestra la información.

![Funcionamiento del MVC en PHP](https://www.phpzag.com/wp-content/uploads/2012/07/mvc-php.jpg)

# Front Controller

El patrón de diseño Front Controller consiste en que un solo componente de la aplicación es el responsable de manejar de todas las peticiones HTTP que ésta recibe. Es decir, hay un solo punto de acceso para todas las peticiones.

En Laravel esta función la cumple el archivo index.php que se encuentra en el directorio public. junto con el archivo .htaccess. Pues que -cuando usas el servidor web Apache- este último archivo se encarga de redirigir todas las peticiones a index.php

El directorio public contiene además, las imágenes, archivos CSS y de Javascript que será públicos para los usuarios y visitantes de la aplicación, el resto de archivos donde se encuentra la lógica de la aplicación es inaccesible para ellos, es decir, son privados.

# PSR-7

Es importante que nuestra aplicación siempre adopte los estandares de PHP, y en este caso vamos a adoptar el PSR-7, que es un estandar en el cual nosotros vamos a normalizar como funciona una petición y una respuesta en PHP. En este caso vamos a utilizar una librería que nos ayude a implementar este estandar, la idea es que reutilizemos código.

Pasar el request que adopta el estandar PSR-7 a nuestro controlador.

De igual manera es importante normalizar nuestro Response.

# Template engines (Motores de plantillas)

Son motores que sirven para renderear el código html y sustituir las partes de código con los datos que se tienen que imprimir.

PHP a pesar de que fue pensado para ser un template engine, se ha enfocado más en la programación, por eso tenemos librerías que se concentran totalmente en esto.

Veamos un ejemplo para analizar las ventajas que puede traer.

# Ejercicio

Crear una tabla users con 5 columnas: id, email, password, created_at, updated_at

* Crear usuarios
* Listar usuarios

# Tutoriales

[Laragon, un entorno de desarrollo para Laravel en Windows](https://styde.net/laragon-un-entorno-de-desarrollo-para-laravel-en-windows/)

[Creando Virtual Hosts con Apache en Windows para WAMP o XAMPP](https://styde.net/creando-virtual-hosts-con-apache-en-windows-para-wamp-o-xampp/)