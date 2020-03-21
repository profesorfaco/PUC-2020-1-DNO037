# Diseño UC / Diseño y Nuevos Medios  

### Clase 4 → Miércoles 27 de marzo, 2020

#### Primeras instrucciones

El README.md de la clase de hoy está más enfocado en el trabajo directo con sus Editores de Código, por lo mismo los archivos `index.html` y `page.html` ya están disponibles en esta carpeta. 

En la clase-04, también tendrán que completar un ejercicio que se publicará en GitHub Pages, tal como se ha hecho al finalizar las tres clases anteriores: 

- Clase 01 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-01#ejercicio

- Clase 02 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-02#ejercicio

- Clase 03 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03#ejercicio

- - - - - - - - - - - - - - - -

#### p5.js & co.

Existen [muchas bibliotecas de JavaScript](https://www.javascripting.com/). Hemos estado introduciéndonos a este lenguaje de programación por la vía de [p5.js](https://p5js.org/es/). 

Lo que haremos en esta clase será explorar la posibilidad de mezclar [p5.js](https://p5js.org/es/) con otro par de bibliotecas de JavaScript:

- [Chart.js](https://www.chartjs.org/) – *Simple, clean and engaging HTML5 based JavaScript charts*.

- [Leaflet.js](https://leafletjs.com/) – *The leading open-source JavaScript library for mobile-friendly interactive maps*.

Si volvemos a la analogía cocinera: Será como mezclar platos semipreparados; un programador con delirio de [Chef Gordon Ramsay](https://youtu.be/GMMRw3Ryki0) podría insultarnos por hacer esto. Pero sus insultos NO nos afectarán porque estamos comenzando a programar en la medida de lo útil para nuestra carrera (que no es ingeniería en programación, ni gastronomía internacional si queremos mantener la analogía).

- **En la mezcla de [p5.js](https://p5js.org/es/reference/) y [Chart.js](https://www.chartjs.org/docs/latest/) obtendremos un [gráfico lineal](https://profesorfaco.github.io/dno037-2020/clase-04/index.html)** que compara tres países en el aumento de casos confirmados de coronavirus durante el mes de marzo, según datos de https://pomber.github.io/covid19/timeseries.json  

- **En la mezcla de [p5.js](https://p5js.org/es/reference/) y [Leafleft.js](https://leafletjs.com/reference-1.6.0.html) obtendremos un [mapamundi](https://profesorfaco.github.io/dno037-2020/clase-04/page.html)** donde se marcan los epicentros de los temblores de +4.5M del último mes, según datos de https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson

¿Qué gracia tiene ese [gráfico lineal](https://profesorfaco.github.io/dno037-2020/clase-04/) y ese [mapamundi](https://profesorfaco.github.io/dno037-2020/clase-04/page.html)? Que se actualizarán en cada cambio en los datos (siempre y cuando la fuente de los datos mantenga su disponibilidad y estructura), porque así quedaron programados.

#### Sin bibliotecas

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

En este ejemplo de JS se crea una variable `d`, a la que se le encarga almacenar [la fecha](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date) en la que una página web es visualizada. Luego, a una variable `h` se le encargar almacenar [solo la hora](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Date/getHours) en tal fecha. Después se crea una variable con el nombre `saludo`, en la que no se almacenan datos de forma inmediata. Mediante [condiciones](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/if...else) (`if (…){…}`, `else if (…){…}`, `else{…}`) se le encargará a la variable `saludo` almacenar la cadena de caracteres que corresponda a la hora en que se visualiza la página web. Finalmente, se escribe el valor correspondiente del `saludo`.

El mismo programa puede ser escrito en un documento aparte, con extensión `.js`. Si a este programa le llamamos `saludo.js` y lo dejamos en la misma carpeta que contiene una página web, podríamos vincularlo escribiendo: `<script src="saludo.js"></script>`. Dentro del documento no tenemos que incluir las etiquetas `<script>…</script>`. 

Ahora, como no estamos usando una biblioteca, corresponde ir a buscar referencias más genéricas respecto de JS:

- [JS CheatSheet](https://htmlcheatsheet.com/js/)

- [WebsiteSetup JavaScript Cheat Sheet](https://websitesetup.org/javascript-cheat-sheet/)

- [Cheatography JavaScript Cheat Sheet](https://www.cheatography.com/davechild/cheat-sheets/javascript/pdf_bw/)

Y con esas referencias se puede empezar a cocinar más allá del plato semipreparado.

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05)
