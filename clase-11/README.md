## Diseño y Nuevos Medios v10 

### Clase 11 → Miércoles 20 de mayo, 2020

#### Bootstrap

[Bootstrap](https://getbootstrap.com/) es un kit de herramientas de código abierto para la implementación de diseño "[responsive](https://es.wikipedia.org/wiki/Dise%C3%B1o_web_adaptable)" y "[mobile-first](https://en.ryte.com/wiki/Mobile_First)" de sitios y aplicaciones web. 

[Bootstrap](https://getbootstrap.com/) fue desarrollado por [Twitter](https://twitter.com/getbootstrap), como un marco de trabajo ([framework](https://es.wikipedia.org/wiki/Framework)) para fomentar, en las herramientas internas, la consistencia en la implementación de la visualidad de la interfaz gráfica de usuario ([Front-End](https://es.wikipedia.org/wiki/Front-end_y_back-end)). Desde su origen ha avanzado en distintas versiones. Su versión estable más reciente es la 4.

Con [Bootstrap](https://getbootstrap.com/) puedes implementar tanto prototipos rápidos como productos acabados, esto mediante el uso de los lenguajes habituales de Front-End para Web: Elementos de HTML5 relacionados con reglas de CSS3 predefinidas con [Sass](https://sass-lang.com/) ([Less](http://lesscss.org/) en versiones anteriores a la 4), además de Javascript simplificado por la biblioteca [jQuery](https://jquery.com/).

Hay distintas maneras para comenzar a trabajar con Boostrap. Un grupo de opciones parten en su [descarga](https://getbootstrap.com/docs/4.0/getting-started/download/), pero una opción mucho más rápida es Bootstrap[CDN](https://es.wikipedia.org/wiki/Red_de_entrega_de_contenidos). Para usar esta última opción, el documento HTML debe verse, inicialmente, de la siguiente manera: 

```
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS de BootstrapCDN  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hola mundo!</title>
  </head>
  <body>
    <h1>Hola mundo!</h1>
    <!-- JS de BootstrapCDN -->    
    <!-- primero jQuery, luego Popper.js, después Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
```

Luego, confiando en la red de entrega de contenidos (Bootstrap[CDN](https://es.wikipedia.org/wiki/Red_de_entrega_de_contenidos)), podemos comenzar a utilizar la grilla de 12 columnas (`col-…`) dentro de la cada fila (`row`) dentro de un contenedor (`container` o `container-fluid`):

```
<div class="container">
	<div class="row">
		<div class="col-12">Ancho completo</div>
		<div class="col-6">Mitad de 12</div>
		<div class="col-6">Mitad de 12</div>		
	</div>
</div>
```

Entre las recién referidas, la clase más interesante es la de columnas (`class="col-…"`), en tanto ofrece varias opciones que  permiten indicar "cuántas columnas se toman" según el ancho del contenedor en la pantalla donde se visualiza el documento HTML. Las opciones se explican en [Grid System](https://getbootstrap.com/docs/4.0/layout/grid/#grid-options).

- - - - - - 

#### Referencias:

- [Curso Gratuito de Bootstrap](https://codigofacilito.com/cursos/bootstrap)

- [Bootstrap 4 Tutorial](https://www.w3schools.com/bootstrap4/default.asp)

- [Bootstrap: Utilities for layout](https://getbootstrap.com/docs/4.0/layout/utilities-for-layout/)

- [Bootstrap: Typography](https://getbootstrap.com/docs/4.0/content/typography/)

- [Bootstrap: Tables](https://getbootstrap.com/docs/4.0/content/tables/)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-12)
