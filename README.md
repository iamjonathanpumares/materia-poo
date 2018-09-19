# Paradigmas de Programación

* Programación estructurada o secuencial
* Programación orientada a objetos: La programación orientada a objetos nos ayudará a estructurar mejor nuestros programas.

## Elementos y Características de la POO

Los **elementos** de la POO, pueden entenderse como los ***"materiales"*** que necesitamos para diseñar y programar un sistema, mientras que las **características**, podrían asumirse como las ***"herramientas"*** de las cuáles disponemos para construir el sistema con esos materiales.

### Elementos principales de la POO

Entre los elementos principales de la POO, podremos encontrar a:

#### Clases

Cuando nosotros pensamos en clases, estamos pensando en objetos del mundo real. Una clase es una plantilla o definición de algo.

#### Propiedades

Son aquellas cualidades o características que describen a nuestros objetos y se representan como variables.

#### Métodos

Los métodos son la acción o función que realiza un objeto. Entendemos por función a realizar una tarea en concreta.

#### Objeto 

Una instancia es la representación concreta de la clase.

### Características de la POO

#### Herencia

Una de las características más importantes de la programación orientada a objetos es la de la herencia. Ésta consiste en que, cuando una clase hereda a otra, obtiene por defecto todas sus propiedades (métodos y atributos), pudiendo definir algunas adicionales. Esto se expresa mediante la palabra clave extends y el nombre de la clase padre, al definir una clase hija que hereda de ésta.

> El método constructor nos permitirá inicializar valores por default, así como también pasar datos como parámetro al momento de inicializar un objeto.

> Todas las funciones que tienen __ antes del nombre de la función se conocen como métodos mágicos.

Las propiedades que tengan la visibilidad de privada no serán accesibles desde esta nueva clase, aunque seguirán existiendo dentro del objeto.

En cualquier momento podemos sobreescribir las propiedades del método padre, así como acceder directamente a las mismas mediante la palabra reservada parent .

Las clases pueden ser extensiones de otras clases. La clase extendida o derivada tiene todas las variables y funciones de la clase base (herencia) y lo que se agregue en la definición extendida.

Los métodos de herencia y sus miembros pueden ser evitados, redeclarándolos con el mismo nombre con el que los definió la clase padre, a menos que la clase padre haya definido un método como final.

Como una buena práctica en PHP lo mejor es tener dividido el código en diferentes archivos. Justo esto es lo que haremos con la definición de la clase Jobs que ahora deberá tener el mismo nombre del archivo, este será BaseElement.php.

Es muy conveniente utilizar require_once cuando queremos utilizar herencia e incluir clases que están en otros archivos.

Dentro de nuestra clase hijo podemos sobrescribir algún método del padre, esto es un concepto que conocemos como polimorfismo. Lo que polimorfismo quiere decir es que tendremos un método que va a funcionar de acuerdo con su contexto donde es llamado.

Si tenemos propiedades con la palabra private en nuestra clase padre, desde nuestra clase hija no podremos acceder a esta propiedad, pero si queremos que siga siendo privada y que las clases hijas tengan acceso podemos usar la palabra clave protected.

#### Encapsulamiento

Es el nivel de visibilidad que queramos darle a alguna variable, para ello podemos utilizar los modificadores de acceso private, public y protected.

PHP: Con la palabra reservada this estaremos haciendo referencia a la variable que pertenece a la clase.

Python: Con la palabra reservada self estaremos haciendo referencia a la variable que pertenece a la clase.

## Métodos mágicos

Son aquellos métodos que permiten 



* Polimorfismo

# Herramientas a utilizar

* Python 3
* Entorno de PHP (XAMMP, MAMP, WAMP, etc.)
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
* Paquete (~)
* Derivado (/)
* Estático (subrayado)