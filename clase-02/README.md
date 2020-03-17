## Diseño y Nuevos Medios v10 

### Clase 02 → Miércoles 18 de marzo, 2020

#### p5.js

Un [copy/paste](https://p5js.org/es/):

> p5.js es una biblioteca de JavaScript para la programación creativa, que busca hacer que programar sea accesible e inclusivo para artistas, diseñadores, educadores, principiantes y cualquier otra persona! p5.js es gratuito y de código abierto porque creemos que el software y las herramientas para aprenderlo deben ser accesibles para todos.

Esta biblioteca fue creada por [Lauren McCarthy](http://lauren-mccarthy.com/) y es desarrollada por una comunidad de colaboradores, con apoyo de [Processing Foundation](https://processingfoundation.org/) y [NYU ITP](https://forms.tisch.nyu.edu/page/s/itp-landing). Entre los colaboradores hay 2 chilenos, que se han encargado de la traducción de referencias, tutoriales y [un libro](https://processingfoundation.press/product/introduccion-a-p5-js/) al castellano; ellos son: [Guillermo Montecinos](https://twitter.com/guillermolooped) y [Aarón Montoya-Moraga](https://twitter.com/montoyamoraga).

Si sabes algo de [Processing](https://processing.org/), las estructuras básicas en [p5.js](https://p5js.org/es/) te resultarán familiares. Hay 2 partes. Una que se ejecuta una única vez, al inicio, y otra que se ejecuta una y otra vez, para dibujar lo que se defina a través de [las funciones predefinidas de esta biblioteca de JavaScript](https://p5js.org/es/reference/).

```
function setup(){
  //colocas acá lo que se ejecuta una única vez
}

function draw(){
  //colocas acá lo que necesitas dibujar una y otra vez
}
```

#### DOM

[DOM es Document Object Model](https://www.w3schools.com/js/js_htmldom.asp), Modelo en Objetos para la Representación de Documentos. A través del DOM, los programas escritos en JS pueden acceder y modificar el contenido, estructura y estilo de la representación de la página web.

Con el DOM puedes cambiar una página así como cuando cambias una imagen con Photoshop. Si capturaste una imagen con 3 elementos y agregas un cuarto "photoshopénadolo", en ningún caso modificas la realidad capturada, pero todos podrán ver una imagen con 4 elementos. Por lo mismo, podría haber inconcruencias al "ver código fuente de la página", como imagen original, y al examinar los elementos en la misma, una vez "photoshopeada".

En uno de los primeros pasos que puedes dar con p5.js, ya está manipulando el DOM: Para agregar un canvas en la página, con las dimensiones que tú decidas para su ancho y alto en pixeles, escribes:

```
function setup(){
  createCanvas(800,600);
}

function draw(){
  //colocas acá lo que necesitas dibujar una y otra vez
}
```

Viendo el código fuente del `index.html` que se trabajó la clase recién pasada, encontrarán con una sección similar a esta:

```
<body>
	<h1>Nombre Apellido</h1>
	<script src="sketch.js"></script>
</body>
```

Pero inspeccionado los elementos del mismo `index.html` se encontrarán con un injerto al final de la misma sección:

```
<body>
	<h1>Nombre Apellido</h1>
	<script src="sketch.js"></script>
	<canvas id="defaultCanvas0" class="p5Canvas" width="1250" height="650" style="width: 1250px; height: 650px;"></canvas>
</body>
```
Para revisar el código fuente basta con un "click de botón derecho" sobre la ventana del navegador. Para inspeccionar elementos es necesario escabar un poco más. Un *shortcut* de varias teclas presionadas al mismo tiempo:

- En Chrome de MAC: cmd + alt + i // En PC cambiar tecla cmd por Ctrl 

- En Firefox de MAC: cmd + alt + i // En PC cambiar tecla cmd por Ctrl  

Otros navegadores pueden complicarnos (sobre todo Safari), por eso limitaremos las opciones a Firefox y Chrome.

#### Variables

En programación, una variable está formada por un espacio en el sistema de almacenaje (memoria principal del computador) y un identificador asociado a dicho espacio. Este espacio contendrá una cantidad conocida o desconocida de datos, que pueden ir variando en la medida que el programa se ejecuta (y esta es la razón del nombre). 

En lenguajes de programación de propósito general, tales como [C++](https://es.wikipedia.org/wiki/C%2B%2B) o [Java](https://es.wikipedia.org/wiki/Java_(lenguaje_de_programaci%C3%B3n)), o en derivados como [Processing](https://processing.org/), las variables se crean escribiendo el **tipo de dato, espacio, nombre de la variable, asignación, valor y fin de la instrucción con punto y coma**, como en `int a = 3;`, `float b = 3.14;`, `String c = "Pi";`.

**Pero en la creación de variables en JS se omite la declaración del tipo de dato: Para todo evento [se puede utilizar `var`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements#Declarations), lo que implica escribir *var*, espacio, nombre de la variable, asignación, valor y fin de la instrucción con punto y coma**, como en `var a = 3;`, `var b = 3.14;`, `var c = "Pi";`.

Respecto del **nombre de la variable** habría que indicar tres cosas: (1) no corresponde iniciarlas con números, (2) no se puede usar espacios, tildes ni acentos, y (3) corresponde evitar el uso de [palabras reservadas](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Palabras_Reservadas) por el lenguaje de programación en uso.

Para la **asignación** de un valor se utiliza un signo igual **=**, lo que no debes confundir con un doble signo igual **==**, que es un operador utilizado para comprobar la igualdad, pero jamás para asignar un valor.

Así, por ejemplo, podría escribir:

```

var x = 800;
var y = 600;

function setup(){
  createCanvas(x,y);
}

function draw(){
  //colocas acá lo que necesitas dibujar una y otra vez
}
```

O bien:

```
var p = [800,600]

function setup(){
  createCanvas(p[0],p[1]);
}

function draw(){
  //colocas acá lo que necesitas dibujar una y otra vez
}
```

- - - - - - -

#### Referencias

- [JavaScript para Gatos](https://jsparagatos.com/)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03)

