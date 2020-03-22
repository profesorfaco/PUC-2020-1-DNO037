## Diseño y Nuevos Medios v10 

### Clase 05 → Miércoles 8 de abril, 2020

Hoy toca evaluación, así que no tengo mucho que explicar. Tengo que encargar algo para que desarrollen en horario de clases:

Hagan su propia versión de https://profesorfaco.github.io/dno037-2020/clase-05/

- `index.html` Con un país distinto de Chile, preparar una portada con:

	- tantas caritas tristes como casos confirmados, menos muertes y recuperados.
	- tantas caritas tristes negras como muertes.
	- tantas caritas contentas como casos recuperados.

- `graph.html` Con cinco países vecinos (entre sí), un grafico lineal que compare número de recuperados.

- `mapa.html` Un mapa donde se marquen los países sí y solo sí las cifras superaron los mil confirmados. 

El resultado debe ponerse en línea, en repositorio `/clase-05`.

- - - - - - - - - - - -

#### Antes de pasar a siguiente asunto, y para que no quede en el tintero: JavaScript sin bibliotecas

Recapitulando, JavaScript es un lenguaje de programación. Con este lenguaje se pueden escribir programas que serán ejecutados en un navegador web. Estos programas pueden ser incluidos o vinculados a una página web a modo de script, entre etiquetas `<script>…</script>`. 

En un programa de JS podemos encontrar dos elementos básicos: código y datos. La parte del código es la que permite redactar instrucciones. La parte de datos es la que permite almacenar información con la que podríamos condicionar las instrucciones. 

Bien podemos trabajar con alguna biblioteca de JavaScript que nos simplifique la vida (y es lo que vinimos haciendo con p5.js, chart.js y leaflet) o podemos prescindir de ellas para que escribir, dentro del documento HTML lo siguiente: 

```
<script>
  var d = new Date();
  var h = d.getHours();
  var saludo;
  if ((h >= 6) && (h < 12)) { 
    saludo = "buenos días"
  } else if ((h >= 12) && (h < 20)) {
    saludo = "buenas tardes"
  } else { 
    saludo = "buenas noches"
  }
  document.write(saludo);
  // Para otros despliegues del saludo, ver https://www.w3schools.com/js/js_output.asp  
</script>
```

En este ejemplo se crea una variable `d`, a la que se le encarga almacenar [la fecha](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date) en la que una página web es visualizada. Luego, a una variable `h` se le encargar almacenar [solo la hora](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date/getHours) en tal fecha. Después se crea una variable con el nombre `saludo`, en la que no se almacenan datos de forma inmediata. Mediante [condiciones](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/if...else) (`if (…){…}`, `else if (…){…}`, `else{…}`) se le encargará a la variable `saludo` almacenar la cadena de caracteres que corresponda a la hora en que se visualiza la página web. Finalmente, se escribe el valor correspondiente del `saludo`.

El mismo programa puede ser escrito en un documento aparte, con extensión `.js`. Si a este programa le llamamos `saludo.js` y lo dejamos en la misma carpeta que contiene una página web, podríamos vincularlo escribiendo: `<script src="saludo.js"></script>`. Dentro del documento no tenemos que incluir las etiquetas `<script>…</script>`. 

Ahora, como no estamos usando una biblioteca, corresponde ir a buscar referencias más genéricas respecto de JS:

- [JS CheatSheet](https://htmlcheatsheet.com/js/)

- [WebsiteSetup JavaScript Cheat Sheet](https://websitesetup.org/javascript-cheat-sheet/)

- [Cheatography JavaScript Cheat Sheet](https://www.cheatography.com/davechild/cheat-sheets/javascript/pdf_bw/)

Y con esas referencias se puede empezar a cocinar más allá del plato semipreparado.

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06)
