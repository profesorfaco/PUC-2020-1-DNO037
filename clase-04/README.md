# Diseño UC / Diseño y Nuevos Medios  

### Clase 04 → Miércoles 1 de abril, 2020

#### Primeras instrucciones

El presente README.md está más enfocado en el trabajo directo con sus Editores de Código, por lo mismo los archivos [`index.html`](https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/index.html) y [`page.html`](https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/page.html) ya están disponibles en esta carpeta. 

**En la clase-04, también tendrán que completar un ejercicio que se publicará en GitHub Pages**, tal como se ha hecho al finalizar las tres clases anteriores: 

- Clase 01 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-01#ejercicio

- Clase 02 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-02#ejercicio

- Clase 03 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03#ejercicio

- - - - - - - - - - - - - - - -

#### p5.js & co.

Existen [muchas bibliotecas de JavaScript](https://en.wikipedia.org/wiki/List_of_JavaScript_libraries). Hemos estado introduciéndonos a este lenguaje de programación por la vía de [p5.js](https://p5js.org/es/). 

Lo que haremos en esta clase será explorar la posibilidad de mezclar [p5.js](https://p5js.org/es/) con otro par de bibliotecas de JavaScript:

- [Chart.js](https://www.chartjs.org/) – *Simple, clean and engaging HTML5 based JavaScript charts*.

- [Leaflet.js](https://leafletjs.com/) – *The leading open-source JavaScript library for mobile-friendly interactive maps*.

Si volvemos a la analogía cocinera: Será como mezclar platos semipreparados; un programador con delirio de [Chef Gordon Ramsay](https://youtu.be/GMMRw3Ryki0) podría insultarnos por hacer esto. Pero sus insultos NO nos afectarán porque (en cuarentena) estamos comenzando a programar en la medida de lo útil para nuestra carrera (que no es ingeniería en programación, ni gastronomía internacional si queremos mantener la analogía).

- **En la mezcla de [p5.js](https://p5js.org/es/reference/) y [Chart.js](https://www.chartjs.org/docs/latest/) obtendremos un [gráfico lineal](https://profesorfaco.github.io/dno037-2020/clase-04/index.html)** que compara tres países en el aumento de casos confirmados de coronavirus durante el mes de marzo, según datos de https://pomber.github.io/covid19/timeseries.json  

- **En la mezcla de [p5.js](https://p5js.org/es/reference/) y [Leafleft.js](https://leafletjs.com/reference-1.6.0.html) obtendremos un [mapamundi](https://profesorfaco.github.io/dno037-2020/clase-04/page.html)** donde se marcan los epicentros de los temblores de +4.5M del último mes, según datos de https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/4.5_month.geojson

¿Qué gracia tiene ese [gráfico lineal](https://profesorfaco.github.io/dno037-2020/clase-04/) y ese [mapamundi](https://profesorfaco.github.io/dno037-2020/clase-04/page.html)? Que se actualizarán en cada cambio en los datos (siempre y cuando la fuente de los datos mantenga su disponibilidad y estructura), porque así quedaron programados.

**Ahora vamos al código:**

Si te asomas al https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/index.html (que mezcla [p5.js](https://p5js.org/es/reference/) y [Chart.js](https://www.chartjs.org/docs/latest/)) podrás ver que dentro del `<script></script>` hay declaraciones de variables, además del uso de funciones `preload()` y `setup()`, pero se omite el uso de `function draw()`. Dentro del `function setup()` de p5.js te encontrarás con un `new Chart()` de Chart.js, que en línea 76  define el uso de un gráfico lineal para visualizar data según las indicaciones entre líneas 77 y 104, con ajustes más específicos entre líneas 105 y 120. Tales indicaciones y definciones vienen en pares de nombre:valor (como objetos de JavaScript), lo que las hace casi autoexplicativas; igualmente puedes buscar ayuda en las referencias disponibles en el sitio web de Chart.js: https://www.chartjs.org/docs/latest/charts/line.html

Si te asomas a https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/page.html (que mezcla [p5.js](https://p5js.org/es/reference/) y [Leafleft.js](https://leafletjs.com/reference-1.6.0.html)) podrás ver que dentro del `<script></script>` también se omite el uso de `function draw()`, y que dentro de la `function setup()` de p5.js hay algunas definiciones que parten con `L` de Leafleft.js: `L.map` define el contexto, `L.tileLayer` define la capa del mapamundi y `L.circle`, dentro de un ciclo for, define cada círculo que corresponde marcar sobre el mapamundi. Y dentro del L.circle podemos aprovechar [la función Math.pow()](https://developer.mozilla.org/es/docs/Web/JavaScript/Referencia/Objetos_globales/Math/pow) porque hace más sentido a la diferencia de [magnitudes](http://www.sismologia.cl/links/glosario.html#def24). Ahora bien, esta biblioteca es un poco más complicada que la presentada arriba, por lo mismo, recomendaría partir explorándola de a poco; podrían intentar aumentar el zoom y centrar a Chile en la pantalla, para echarle un vistazo a lo que ha pasado entre [Visviri y Puerto Toro](https://es.wikipedia.org/wiki/Anexo:Puntos_extremos_de_Chile). Para apoyarse en este caso, las referencias las encuentran en: https://leafletjs.com/reference-1.6.0.html

#### Mi JSON

Volviendo a algo dicho más arriba, la gracia del [gráfico lineal](https://profesorfaco.github.io/dno037-2020/clase-04/) y el [mapamundi](https://profesorfaco.github.io/dno037-2020/clase-04/page.html) que revisan está en su actualización automática, porque visualizan datos que se podrían actualizar automáticamente, manteniendo una estructura. Luego, si tenemos la intención de [ponernos a prueba](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05), primero conviene probar nuestra capacidad de preparar y consultar datos. En un siguiente nivel, en la medida que vayan familiarizándose con las referencias de cada biblioteca, podrían exigirse más (hasta llegar a un punto en que estas bibliotecas les queden un poco chicas, y tengan que ir por otra).

En la clase pasada se adelantó la posibilidad de contruir nuestros propios JSON. Por ejemplo, podríamos pensar en uno que mezcle los ejemplos recién presentados: Un JSON para dibujar círculos en un mapamundi, con el radio dependiente de números de casos confirmados de coronavirus por millón de habitantes en cada país, hasta el 31 de marzo de 2020. 

Si nos abocamos a esa tarea, lo que corresponde hacer, además de conseguir los números oficiales, es buscar coordenadas geográficas del centro de sus capitales o ciudad más "céntrica". Una cosa es marcar el centro de Chile en Santiago, pero otra es marcar el centro de EE.UU. en Washington D.C. (podrían marcar el centro en Denver para el segundo caso); si consideramos los dos países mencionados, podría resultar en lo siguiente:

```
[
   {
      "pais":"Chile",
      "coordenadas":[
         -33.4372,
         -70.6506
      ],
      "casos":2738,
      "habitantes":18.05
   },
   {
      "pais":"EE.UU.",
      "coordenadas":[
         39.7618,
         -104.881
      ],
      "casos":189633,
      "habitantes":327.2
   }
]
```

Copien y peguen este JSON en un nuevo documento de su editor de código fuente. Guárdenlo con el nombre `datos.json` y agreguen un tercer país, el que quieran. Cuando tengan ese país agregado, pueden copiar y pegar el código en servicios como https://jsonformatter.curiousconcept.com/ o https://jsonlint.com/, allí se les indicará si acaso lo escrito cumple o no con las reglas de JSON (si cumple las reglas indicará que es *valid*). 

- - - - - - -

#### Ejercicio

**Antes de enviar un correo electrónico** solicitando las instrucciones para el ejercicio que corresponde publicar en tu repositorio de `/clase-04`, **debes resolver un pre-ejercicio**:

Siguiendo la estructura del JSON presentado más arriba, de arreglo `[]` con objetos `{}`, teniendo cada objeto cuatro pares nombre:valor (`"pais"`, `"coordenadas"`, `"casos"` y `"poblacion"`): 

- arma tu propio JSON con 7 países (toma la información de https://pomber.github.io/covid19/timeseries.json)

- valídalo en https://jsonformatter.curiousconcept.com/ 

- publícalo en http://myjson.com/ 

Anota la dirección con la que quede publicado tu JSON (debería tener la estructura https:// api . myjson . com / bins / nombre de caracteres y números aleatoreos)

Cuando tengas tal dirección podrás enviarme el correo solicitando las instrucciones para el ejercicio de la clase de hoy. Tendrás que incluir en asunto o contenido la dirección de tu JSON; como respuesta recibirás las instrucciones para la modificación de [index.html](https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/index.html) y [page.html](https://github.com/profesorfaco/dno037-2020/blob/gh-pages/clase-04/page.html) ya compartidos.

Mientras tú sigues las instrucciones que serán enviadas, yo armaré un único JSON con todos sus aportes; un JSON que usaremos la [próxima clase](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05).

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05)
