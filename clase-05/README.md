## Diseño y Nuevos Medios v10 

### Clase 05 → Miércoles 8 de abril, 2020

Como cada clase, comenzamos con un correo que tiene algunas indicaciones. El día de hoy tenemos evaluación. Por ello, las indicaciones están contenidas en pautas:

#### PAUTA DE EVALUACIÓN

| Documento    | Desafío            				        		   | Puntos |
|:-------------|:------------------------------------------|:------:|
| `index.html` | Cambia a Chile por un país cuya cantidad de afectados permita diferenciar caras tristes claras (casos confirmados, sin muertos ni recuperados) de caras tristes oscuras (muertos) y caras contentas (recuperados) | 0.5 |
| `index.html` | Agrega, sobre las caras y centrado a la página, el nombre de país cuyos datos están siendo desplegados en forma de caras | 0.5 |
| `graph.html`| Cambia el asunto que se despliega en la visualización: En lugar de mostrar casos, muestra el número de recuperados durante marzo | 1.0 |
| `graph.html`| Cambia dos de los cinco países que se despliegan en la visualización (recuerda evitar países con nombres compuestos o caracteres extraños, como Taiwan*) | 1.0 |
| `graph.html`| Cambia la definición cromática del gráfico por cinco [matices](http://proyectacolor.cl/teoria-de-los-colores/propiedades-de-los-colores/) adyacentes (o vecinos) en la [Material Palette](https://material.io/resources/color/) o un *color scheme* recomendado por [colorbrewer 2.0](https://colorbrewer2.org/#type=qualitative&scheme=Set1&n=5) | 1.0 |
| `mapa.html` | Cambia la fuente de los datos que alimentan el mapa. Ya no corresponde que se le asigne a la variable `url` un JSON que no está actualizado (si cumples con aquello que es solicitado en correo, ya tienes una fuente de datos actualizada) | 1.0 |

**Importante insistir:** La suma de puntos en esta pauta de evaluación da como máximo 5.0. Los 2.0 que faltan (para el 7.0) dependen de seguir instrucciones enviadas por correo al comienzo de la clase.

#### PAUTA DE PUNTOS EXTRA

| Documento    | Desafío            				        		   | Puntos |
|:-------------|:------------------------------------------|:------:|
| `graph.html` | En caso quieras asegurar medio punto extra, puedes cambiar el tipo de gráfico que se despliega en página, por ejemplo, cambiar *lineal* por *barras llenas* (que borde y contenido tengan mismo color) | 0.5 |
| `mapa.html`  | En la parte superior de la página, en un nivel sobre Groenlandia y el archipiélago de Svalbard, intenta agregar título y simbología (qué significa cada color de círculo). Para darle algo de consistencia al sitio web, replica el estilo de la página de gráficos. | 0.5 |

**En caso se obtenga nota 7.0 sin uso del puntos extra, éstos se traspasan a los acumulados clase a clase.**

- - - - - - - - 

#### Entregas

| No.   | Nombre                | 10:30 hrs. | 11.30 hrs. | Puntaje por pauta | Puntaje extra | 
|:-----:|:----------------------|:----------:|:----------:|:------------------:|:-------------:|
|   1   | CAMILA AZÓCAR          | … | … | … | … | 
|   2   | MARÍA PAZ CONCHA       | P | P | P | P |  
|   3   | OLGA F. VIO            | … | … | … | … |  
|   4   | TRINIDAD GONZÁLEZ      | … | … | … | … |  
|   5   | MATÍAS HAGEN           | … | … | … | … |  
|   6   | MARÍA FRANCISCA HEPP   | … | … | … | … |  
|   7   | MARIA ELIANA INFANTE   | … | … | … | … |  
|   8   | MAGDALENA LABARCA      | … | … | … | … |  
|   9   | ELSA MORA              | … | … | … | … |  
|  10   | VANESSA MÜLLER         | … | … | … | … | 
|  11   | JANA MÜLLER            | … | … | … | … | 
|  12   | MURIEL MUÑOZ           | … | … | … | … | 
|  13   | MARÍA TRINIDAD NORIEGA | … | … | … | … | 
|  14   | ROSARIO OLIVARES       | … | … | … | … | 
|  15   | AMPARO ORTÚZAR         | … | … | … | … | 
|  16   | VALERIA PARRAGUEZ      | … | … | … | … | 
|  17   | FRANCISCO PEZOA        | … | … | … | … | 
|  18   | FRANCISCA PURCELL      | … | … | … | … | 
|  19   | MARTINA RIVAS          | … | … | … | … | 
|  20   | PILAR SAAVEDRA         | … | … | … | … | 
|  21   | LISA SAEZ              | … | … | … | … | 
|  22   | DAVID SÁNCHEZ          | … | … | … | … | 
|  23   | CECY SOTO              | … | … | … | … | 
|  24   | MARÍA ELISA VALDÉS     | … | … | … | … | 
|  25   | FRANCISCA VIAL         | … | … | … | … | 
|  26   | MARIA JOSE VILLASANTE  | … | … | … | … | 

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
