## Diseño y Nuevos Medios v10 

### Clase 02 → Miércoles 18 de marzo, 2020

- - - - - - - - - - - - - - - - - - - - - - - -

#### Primeras instrucciones:

Para la clase de hoy, es necesario tener instalado en su computador uno de los siguientes editores de código: 

- [Atom.io](https://atom.io/)

- [Sublime Text](https://www.sublimetext.com/)

- [Brakets](http://brackets.io/)

El listado está organizado para que prefieras el primero, si no lo puedes conseguir, anda por el segundo; en caso que el primero y segundo fallen, anda por el tercero.

Es muy recomendable usar uno de los siguientes navegadores web: 

- Chrome

- Firefox

También resulta muy necesario que desactives los traductores automáticos; ya te habrás dado cuenta que el *coding* se hace en *english*, por lo que la traducción automática (y forzada) al español puede perjudicarte.

La primera actividad consiste en tomar el trabajo hecho la semana recién pasada, para juntar, en un único documento, aquello que estaba repartido entre `index.html`, `estilo.css` y `sketch.js`.

Puedes crear un nuevo documento en tu editor de código (usar teclas `cmd` + `N` en Mac; `Ctrl` + `N` en PC) y guardarlo como `index.html`. Luego copia y pegar lo que sigue:

```
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/1.0.0/p5.js"></script>
    <style>
    
    	/* copiar y pegar aquí todo el contenido del documento style.css */
    
    </style>
    <title>MI SEGUNDA PÁGINA</title>
  </head>
  <body>
      <h1>Nombre Apellido</h1>
      <script>

      	// copiar y pegar aquí todo el contenido del documento sketch.js
      
      </script>
  </body>
</html>
``` 

Pon atención a las instrucciones de los comentarios que dejé en lo que estás copiando y pegando; estamos aprovechando que en el lenguaje HTML existen unas etiquetas o *tags* que dan la posibilidad de escribir, ahí mismo, en otros lenguajes o dialectos. Entre `<style>…</style>` se puede escribir en lenguaje CSS (que es un lenguaje de descripción) y entre `<script>…</script>` se puede escribir en lenguaje JS (que es un lenguaje de programación)

Cuando esté todo copiado y pegado, guarda los cambios (usar teclas `cmd` + `S` en Mac; `Ctrl` + `S` en PC). 

Si abres en tu navegador (Chrome o Firefox) este nuevo `index.html`, verás algo muy parecido a lo pudiste ver [al finalizar la clase recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-01#ejercicio).

- - - - - - - - - - - - - - - - - - - - - - - -

**En lo que continúa nos vamos a fijar en lo que queda dentro de** `<script>…</script>`, porque en ese espacio vamos a introducirnos a JavaScript. Pero recuerda la analogía: Vamos a aprender a programar mediante bibliotecas de JavaScript que es como aprender a cocinar mediante platos semipreparados.

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

[DOM es Document Object Model](https://www.w3schools.com/js/js_htmldom.asp), Modelo en Objetos para la Representación de Documentos. A través del DOM, los programas escritos en JavaScript pueden acceder y modificar el contenido, estructura y estilo de la representación de la página web.

Con el DOM puedes cambiar una página así como cuando cambias una imagen con Photoshop. Si capturaste una imagen con 3 elementos y agregas un cuarto *photoshopénadolo*, en ningún caso modificas la realidad capturada, pero todos podrán ver una imagen con 4 elementos. Por lo mismo, podría haber inconcruencias al "ver código fuente de la página", como imagen original, y al examinar los elementos en la misma, una vez *photoshopeada*.

Viendo el código fuente del `index.html` que creaste hace algunos minutos, encontrarás un cierre como el que sigue:

```
</script>
</body>
</html>
```

Pero inspeccionado los elementos del mismo `index.html`, te encontrarás con un "cuarto elemento *photoshopeado*":

```
</script>
<canvas id="defaultCanvas0" class="p5Canvas" width="1250" height="650" style="width: 1250px; height: 650px;"></canvas>
</body>
</html>
```

Para revisar el código fuente basta con un "click de botón derecho" sobre la ventana del navegador. Para inspeccionar elementos es necesario escabar un poco más:

- En Chrome de MAC: `cmd` + `alt` + `I` // En PC cambiar tecla `cmd` por `Ctrl` 

- En Firefox de MAC: `cmd` + `alt` + `I` // En PC cambiar tecla `cmd` por `Ctrl`  

Agreguemos algo más a esta diferencia entre código fuente y DOM. 

Dentro de la función setup, agreguemos una segunda línea, sin alterar nada del resto: 

```
function setup() {
    createCanvas(windowWidth, windowHeight);
    document.getElementsByTagName("h1")[0].append(" en cuarentena");
}
```

Después de guardar los cambios en el `index.html` recién editado, vuelve a revisarlo en tu navegador. Puedes refrescar la página si es que no lo habías cerrado (`cmd` + `R` o `Ctrl` + `R`). Fíjate en tu nombre.

Como usamos [document.getElementsByTagName](https://developer.mozilla.org/es/docs/Web/API/Document/getElementsByTagName), obtenemos, en teoría, un arreglo de todos los elementos [h1](https://developer.mozilla.org/es/docs/Web/HTML/Elemento/Elementos_títulos) del documento. Pero de ese arreglo necesitamos solo el primer elemento, por eso usamos [el cero entre paréntesis cuadrado](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Array). A ello, como *photoshopeando*, le adjuntamos (append) los caracteres que tenemos entre paréntesis y comillas. 

Recién nos salimos de la biblioteca de p5.js, pero nos mantuvimos en JavaScript; volviendo a la analogía cocinera: Fue como ponernos creativos y exceder el plato semipreparado, con un ingrediente fresco. Por eso la referencia para [document.getElementsByTagName](https://developer.mozilla.org/es/docs/Web/API/Document/getElementsByTagName) apuntaba a un lugar distinto de [las referencias de p5.js](https://p5js.org/es/reference/).

Esta salida nos exige revisar un par de cosas: 

- la página [JavaScript para Gatos](https://jsparagatos.com/), llegando hasta el subtítulo "Callbacks", sin incluirlo. O sea, llega hasta: "…estás haciendo **estructuras de datos**, como legos!"

- los apéndices A, B y C en el libro "Introducción a p5.js", referido más arriba. Estos apéndices están entre págs. 221 - 227  

Una vez completada tales lecturas, envía un correo para que yo te envíe la base del ejercicio que debes dejar en línea dentro del repositorio correspondiente a la segunda clase. 

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03)

