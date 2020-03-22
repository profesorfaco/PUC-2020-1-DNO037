# Diseño UC / Diseño y Nuevos Medios  

### Clase 4 → Miércoles 1 de abril, 2020

#### Primeras instrucciones

El README.md de la clase de hoy está más enfocado en el trabajo directo con sus Editores de Código, por lo mismo los archivos `index.html` y `page.html` ya están disponibles en esta carpeta. 

En la clase-04, también tendrán que completar un ejercicio que se publicará en GitHub Pages, tal como se ha hecho al finalizar las tres clases anteriores: 

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

#### Mi JSON

También ese posible que ustedes construyan sus propios JSON. Por ejemplo, podrían pensar en uno que mezcle los ejemplos recién presentados: Un JSON para dibujar círculos en un mapamundi, con el radio dependiente de números de casos confirmados de coronavirus en el país hasta el 31 de marzo de 2020. 

Lo que corresponde hacer en tal caso, además de conseguir los números oficiales, es buscar coordenadas geográficas del centro de sus capitales o ciudad más "céntrica". Una cosa es marcar el centro de Chile en Santiago, pero otra es marcar el centro de EE.UU. en Washington D.C. (podrían marcar el centro en Denver para el segundo caso); si consideramos los dos países mencionados, podría resultar en lo siguiente:

```
[
   {
      "pais":"Chile",
      "coordenadas":[
         -33.4372,
         -70.6506
      ],
      "casos":1234
   },
   {
      "pais":"EE.UU.",
      "coordendas":[
         39.7618,
         -104.881
      ],
      "casos":2345
   }
]
```

Copien y peguen este JSON en un nuevo docuento de su editor de código fuente. Guarden ese documento con el nombre `datos.json` y agreguen un tercer país. Cuando tengan ese país agregado, pueden copiar y pegar el código en servicios como https://jsonformatter.curiousconcept.com/ o https://jsonlint.com/, allí les dirá si lo que escribe está *validated* o no. Luego, cuando esté validado, pueden copiar y pegar el código en http://myjson.com/ o si prefieren, subirlo a un repositorio de GitHub.

- - - - - - -

#### Ejercicio

Antes de enviar un correo electrónico solicitando las indicaciones para el ejercicio que corresponde publicar en tu repositorio de clase-04, debes resolver un pre-ejercicio:

Siguiendo la estructura del JSON presentado más arriba, de arreglo `[]` con objetos `{}`, teniendo cada objeto 3 pares nombre:valor (`"pais"`, `"coordenadas"` y `"casos"`): 

- arma tu propio JSON con 10 países

- valídalo en https://jsonformatter.curiousconcept.com/ 

- publícalo en http://myjson.com/ 

Anota la dirección con la que quede publicado tu JSON (debería tener la estructura https:// api . myjson . com / bins / nombre de caracteres y números aleatoreos)

Cuando tengas tal dirección podrás enviarme el correo solicitando las instrucciones para el ejercicio, porque tendrás que incluir en asunto o contenido la dirección de tu JSON; como respuesta recibirás las instrucciones para la modificación de index.html y page.html ya compartidos.

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05)
