# Diseño y Nuevos Medios v2020 → Clase 02  

### Miércoles 18 de marzo

#### 1. p5.js

[Copy/paste](https://p5js.org/es/) p5.js es una biblioteca de JavaScript para la programación creativa, que busca hacer que programar sea accesible e inclusivo para artistas, diseñadores, educadores, principiantes y cualquier otra persona! p5.js es gratuito y de código abierto porque creemos que el software y las herramientas para aprenderlo deben ser accesibles para todos.

Esta biblioteca fue creada por [Lauren McCarthy](http://lauren-mccarthy.com/) y es desarrollada por una comunidad de colaboradores, con apoyo de [Processing Foundation](https://processingfoundation.org/) y [NYU ITP](https://forms.tisch.nyu.edu/page/s/itp-landing). Entre los colaboradores hay 2 chilenos, que se han encargado de la traducción de referencia y tutoriales al castellano; ellos son: [Guillermo Montecinos](https://twitter.com/guillermolooped) y [Aarón Montoya-Moraga](https://twitter.com/montoyamoraga).

Si sabes algo de [Processing](https://processing.org/), las estructuras básicas en [p5.js](https://p5js.org/es/) te resultarán familiares. Hay 2 partes. Una que se ejecuta una única vez, al inicio, y otra que se ejecuta una y otra vez, para dibujar lo que sea que se programe.

```
function setup(){
  //colocas acá lo que se ejecuta una única vez
}

function draw(){
  //colocas acá lo que necesitas dibujar una y otra vez
}
```


#### 2. DOM

[DOM es Document Object Model](https://www.w3schools.com/js/js_htmldom.asp), Modelo en Objetos para la Representación de Documentos. A través del DOM, los programas escritos en JS pueden acceder y modificar el contenido, estructura y estilo de la representación de la página web. Por ejemplo:

```
<script>
  document.getElementById("unique").style.color="#FF0000";
</script>
```

En este ejemplo accedemos a la representación del documento para obtener el elemento de identidad `unique`. Este elemento será modificado con un cambio de estilo: Su color visto pasará a ser rojo.  

Modificar la representación de una página web es como "photoshopear" una imagen. Si capturaste 3 elementos y con Photoshop agregas un cuarto, en ningún caso modificas la realidad capturada, pero todos podrán ver una imagen con 4 elementos. Lo que modificas es lo representado. No se puede alterar lo presentado.

#### 3. Variables

En programación, una variable está formada por un espacio en el sistema de almacenaje (memoria principal del computador) y un identificador asociado a dicho espacio. Este espacio contendrá una cantidad conocida o desconocida de datos, que pueden ir variando en la medida que el programa se ejecuta (y esta es la razón del nombre). 

En lenguajes de programación de propósito general, tales como [C++](https://es.wikipedia.org/wiki/C%2B%2B) o [Java](https://es.wikipedia.org/wiki/Java_(lenguaje_de_programaci%C3%B3n)), o en derivados como [Processing](https://processing.org/), las variables se crean escribiendo el **tipo de dato, espacio, nombre de la variable, asignación, valor y fin de la instrucción con punto y coma**, como en `int a = 3;`, `float b = 3.14;`, `String c = "Pi";`.

**Pero en la creación de variables en JS se omite la declaración del tipo de dato: Para todo evento [se puede utilizar `var`](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements#Declarations), lo que implica escribir *var*, espacio, nombre de la variable, asignación, valor y fin de la instrucción con punto y coma**, como en `var a = 3;`, `var b = 3.14;`, `var c = "Pi";`.

Respecto del **nombre de la variable** habría que indicar tres cosas: (1) no corresponde iniciarlas con números, (2) no se puede usar espacios, tildes ni acentos, y (3) corresponde evitar el uso de [palabras reservadas](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Palabras_Reservadas) por el lenguaje de programación en uso.

Para la **asignación** de un valor se utiliza un signo igual **=**, lo que no debes confundir con un doble signo igual **==**, que es un operador utilizado para comprobar la igualdad, pero jamás para asignar un valor.

Además de tener variables a las que se le asigna un valor numeral, entero o decimal (ej: `var a = 1;`), y variables a las que se les asigna una cadena de caracteres o *string* (ej: `var a = "uno";`), podemos tener una variable a la que se le asigna un arreglo o *array* `var a = ["uno", 2, "tres",4, "cinco"];`. Luego, dentro del arreglo, tenemos distintas posiciones partiendo del cero. Podemos obtener el valor en primera posición (uno) cuando escribimos `a[0]`.

También podemos tener una variable a la que se le asigna un "object" como contenido: `var a = {uno:"gato", dos:"perro", tres:"tortuga", cuatro:"iguana"};`. En este caso, podemos pedir los contenidos del objeto *por su nombre*. Podemos obtener el valor "gato" cuando pedimos `a.uno`

Luego podemos comenzar a mezclar:

```
var a = [ { name: "Sergey Prokopyev", craft: "ISS" }, { name: "Alexander Gerst", craft: "ISS" }];
```

En este caso, si quisiera obtener el nombre "Sergey Prokopyek", tendría que ir por `a[0].name` o `a[0]["name"]`, porque se trata de un arreglo (`[…]`), que contiene objetos (`[{…},{…},{…}]`). Y si volvemos sobre la [manipulación del DOM](#2-dom), podríamos hacer que tal nombre aparezca en la representación de la página, indicando: 

```
<script>
  var a = [ { name: "Sergey Prokopyev", craft: "ISS" }, { name: "Alexander Gerst", craft: "ISS" }];
  document.getElementById("unique").innerHTML = a[0].name;
</script>
```

- - - - - - -

#### Referencias

- [Fundamentos de JavaScript](https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

- [JavaScript for Beginner](http://xahlee.info/js/js_basics_index.html)

- [JavaScript para Gatos](https://jsparagatos.com/)

- [JavaScript Tutorial](https://www.w3schools.com/js/)

- [Programación en JavaScript/Variables](https://es.wikibooks.org/wiki/Programaci%C3%B3n_en_JavaScript/Variables)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03)

