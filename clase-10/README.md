## Diseño y Nuevos Medios v10 

### Clase 10 → Miércoles 13 de mayo, 2020

#### Bootstrap

[Bootstrap](https://getbootstrap.com/) es un kit de herramientas de código abierto para la implementación de diseño [responsive](https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable) y [mobile-first](https://en.ryte.com/wiki/Mobile_First) de sitios y aplicaciones web. 

Con [Bootstrap](https://getbootstrap.com/) puedes implementar tanto prototipos rápidos como productos acabados, esto mediante el uso de Elementos de HTML5 relacionados con reglas de CSS3 predefinidas con [Sass](https://sass-lang.com/) ([Less](http://lesscss.org/) en versiones de Boostrap anteriores a la 4), además de Javascript simplificado por la biblioteca [jQuery](https://jquery.com/).

Hay distintas maneras de comenzar a trabajar con Boostrap. Hay quienes parten en su [descarga](https://getbootstrap.com/docs/4.0/getting-started/download/), pero nosotros vamos a partir del modo que indica la [documentación de Bootstrap](https://getbootstrap.com/docs/4.4/getting-started/introduction/#starter-template), con un documento HTML que debe verse así: 

```
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>¡Hola mundo!</title>
  </head>
  <body>
    <h1>¡Hola mundo!</h1>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
```

Es importante notar que en las últimas líneas se va por tres bibliotecas de JavaScript, siendo la primera una versión `slim` y `min` de jQuery. La versión `slim` es suficiente para que funcionen las dos biblitecas que le siguen, pero podría ser insuficiente si es que queremos hacer otras cosas con jQuery. Por ello, sería recomendable reemplazar la línea que va por tal jQuery, por esta otra:

```
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
```

Con el documento HTML listo, podemos comenzar a utilizar la grilla de 12 columnas (`col-…`) dentro de la cada fila (`row`), dentro de un contenedor (`container` o `container-fluid`). Por ejemplo, podemos reemplazar la línea `<h1>Hola mundo!</h1>` por:

```
<div class="container">
	<div class="row">
		<div class="col-12">Ancho completo</div>
		<div class="col-6">Mitad de 12</div>
		<div class="col-6">Mitad de 12</div>		
	</div>
</div>
```

En cada elemento hay un atributo de clase (`class="…"`). Conviene ponerle mucha atención a los `"col-…"`, en tanto permiten indicar **cuántas de las 12 columnas de ancho del `row` corresponde tomar** dado determinado [ancho, en pixeles, del viewport](https://getbootstrap.com/docs/4.4/layout/grid/#grid-options). Las opciones se explican en la página de documentación del sitio web de Bootstrap, en sección [Layout → Grid → Responsive classes](https://getbootstrap.com/docs/4.4/layout/grid/#responsive-classes)

- - - - - - - - - - - - 

#### Primeras instrucciones

Antes de las 11.00 hrs. podrías resolver lo siguiente:

**1. Toma el [index.html](https://profesorfaco.github.io/dno037-2020/clase-10/) que ya está en la carpeta de esta clase** y realiza los siguientes cambios de contenidos. 

**2. Cambia el video embebido**: Selecciona algún video en [YouTube](https://www.youtube.com/). Entre las opciones que están debajo del video seleccionado, debes hacer clic en COMPARTIR y fijarte en la primera de las opciones en la ventana emergente; con un clic en INSERTAR se te entrega algo de código HTML que puedes copiar. De lo copiado, solo usaremos el atributo `src="https://www.youtube.com/embed/………"`. Una vez hecho el cambio del atributo, guarda y revisa el resultado, podría ser que obtengas un mensaje "El vídeo no está disponible", y te ofrezca otras opciones, eso significa que hiciste bien el cambio, pero tienes que intentar con otro video (las grandes compañías de entretenimiento tienden a bloquear los contenidos que publican). 

**3. Cambia el título y los párrafos dentro de `<header></header>`**: Cambia ese título principal que dice "Bootstrap", además de los párrafos que comienzan con "Lorem ipsum…" y "Cras rutrum lorem…", por algo que se pueda relacionar al video embebido. 

**4. Cambia el contenido de la variable `texto` en línea 49**: La variable contiene seis frases, todas dicen `"Lorem ipsum dolor sit amet, consectetur adipiscing elit"`. Cámbialas por 6 frases distintas, que puedan relacionarse con el video embebido. No descuides las "comillas". 

**5. Cambia el texto simulado dentro de `<footer></footer>`**:  Puedes replicar lo hecho en las clases pasadas; a un lado puedes escribir Nombre Apellido y al otro lado puedes escribir el número de la clase o la fecha. 

Teniendo los cambios listos, crea tu repositorio para esta `/clase-10`. Coloca allí el `index.html` que acabas de modificar y envía correo a profesor@faco.cl con indicación de la dirección de la GitHub Page correspondiente.

Mientras esperas correo con indicaciones para continuar, favor revisa las siguientes "utilities" de Bootstrap:

- https://getbootstrap.com/docs/4.4/utilities/colors/
- https://getbootstrap.com/docs/4.4/utilities/embed/
- https://getbootstrap.com/docs/4.4/utilities/shadows/
- https://getbootstrap.com/docs/4.4/utilities/spacing/
- https://getbootstrap.com/docs/4.4/utilities/text/

- - - - - - 

#### Ejercicio

Pendiente.

- - - - - - 

#### Referencias:

- [Curso Gratuito de Bootstrap](https://codigofacilito.com/cursos/bootstrap)

- [Bootstrap 4 Tutorial](https://www.w3schools.com/bootstrap4/default.asp)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-11)
