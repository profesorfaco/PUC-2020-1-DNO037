## Diseño y Nuevos Medios v10 

### Clase 08 → Miércoles 29 de abril, 2020

#### Primeras instrucciones

Esta es la tercera clase dedicada a HTML + CSS. Ya hemos realizado dos ejercicios para entender esta relación de ambos lenguajes de descripción: 

- Clase 06 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06#ejercicio

- Clase 07 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-07#ejercicio

En la carpeta dispuesta para la clase de hoy, y que debes descargar a la brevedad posible, no se incluye un `index.html`. 

Por favor reutiliza el `index.html` que preparaste para la clase recién pasada, haciéndole un par de ajustes: uno a nivel de navegación (`<nav></nav>`) y otro a nivel de pie de página (`<footer></footer`). Para los ajustes, guíate por tales elementos HTML dentro de las páginas a descargar. 

Habiendo hecho el par de ajustes, y reuniendo todo dentro de una única carpeta, podrás revisar este sitio web con tu navegador y notar que hay textos simulados (*Loren ipsum…*) que corresponde reemplazar con lo más partinente a lo que no está simulado en `page-1.html`, `page-2.html` y `page-3.html`. También podrás notar que hay algunos "nuevos trucos" con los que se generan las tablas en la `page-2.html`  y el gráfico en `page-3.html`.

Cuando los ajustes en `index.html` y reemplazos de contenido en `page-1.html`, `page-2.html` y `page-3.html` estén listos, y ya hayas encontrado los "nuevos trucos" que aprovechan algunas bibliotecas de JavaScript ([jQuery](https://jquery.com/), [Papa Parse](https://www.papaparse.com/), [Charts.js](https://www.chartjs.org/)), **por favor sube todo a tu repositorio de la `/clase-08` y envía correo a profesor@faco.cl con indicación de la URL de la GitHub Page correspondiente**. 

**Tienes hasta las 11.00 hrs. para hacerlo**. 

Mientras esperas la repuesta del correo, con indicación para continuar con la clase, puedes revisar en detalle lo que sigue. Después de tal revisión, podrías buscar los tipos de selectores en uso en el `estilo.css` que se incluye en la carpeta.

- - - - - - - - - - - - -

#### HTML y CSS, con énfasis en el segundo

**Hoy vamos a ponerle más atención a CSS (Cascading Style Sheets; Hojas de estilo en cascada)**, un lenguaje utilizado para describir la presentación de documentos escritos con Lenguaje de Marcado ([HTML](https://developer.mozilla.org/es/docs/Glossary/HTML), [XML](https://es.wikipedia.org/wiki/Extensible_Markup_Language), [SVG](https://developer.mozilla.org/es/docs/Web/SVG), etc.)

Como se enseñó [hace un par de clases](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06#css), la unidad más básica de CSS es la regla. Cada regla se inicia con un(os) [selector(es)](https://developer.mozilla.org/es/docs/Web/CSS/Referencia_CSS#Selectores) y  luego contiene, entre paréntesis de llave `{…}`, un [bloque de declaraciones](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Bloques_de_declaraciones_en_CSS). Una [declaración](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Declaraciones_de_CSS) es separada de otra mediante punto y coma `;`. Cada declaración se compone de una [propiedad](https://www.w3.org/TR/css-2018/#properties) y su correspondiente valor, habiendo casos de [propiedades abreviadas](https://developer.mozilla.org/es/docs/Web/CSS/Shorthand_properties) a las que corresponden varios valores:

```
selector{
  propiedad:valor;
  propiedad:valor valor valor;
}

selector{ propiedad:valor; propiedad:valor valor valor;}
```

#### 1. Selectores básicos

**Selectores de tipo o etiqueta**: El nombre del selector en la regla CSS repite el nombre de las etiquetas del elemento HTML. Por ejemplo, la regla CSS `body{…}` se aplica al elemento HTML `<body>…</body>`

**Selectores de clase**: El nombre del selector, distinto de un nombre de selector de tipo, es antecediento por un `.`; la regla con este tipo de selector se aplica en cualquier elemento HTML al que se le asigne la clase del mismo nombre. Por ejemplo, la regla CSS `.importante{…}` se podría aplicar a los elementos `<span class="importante">…</span>`, `<p class="importante">…</p>`, `<h3 class="importante">…</h3>` o cualquier otro que tenga tal clase. Ahora bien, este selector puede ser más específico si se escribe `p.importante{…}`; en tal caso se aplicaría a cualquier párrafo que tenga esa clase, descartando `<span class="importante">…</a>`, `<h3 class="importante"></h3>` o cualquier otro elemento que tenga este atributo de clase pero no sea párrafo `<p class="importante">…</p>`.

**Selectores de ID**: El nombre del selector, distinto de un nombre de selector de tipo, es antecediento por un `#`. La regla de este tipo de selector se aplica a un elemento HTML al que se le asigne la identidad del mismo nombre. Así, por ejemplo, `#principal{…}` apunta al elemento que tenga tal atributo de identidad, como `<div id="principal">…</div>`. Una identidad debe usarse una única vez por documento HTML.

**Selectores universales**: El nombre del selector es un `*`, para aputar a cualquier elemento HTML. O sea, `*{…}` puede afectar a un `<body>…</body>`, un `<span>…</span>`, un `<p>…</p>`, un `<p>…</p>`, un `<div>…</div>` o cualquier otro elemento.

**Selectores de atributos**: Donde se agregar al selector un `[atributo=valor]` para apuntar a cualquier elemento HTML que tenga tal atributo. Así, por ejemplo, `a[href$=".pdf"] {…}` puede apuntar a cualquier elemento de vínculo (a, de *anchor*) cuya referencia de hipertexto termine en .pdf `<a href="informe-final-final-final.pdf">…</a>`

Favor busca la definición de los selectores recién presentados en: 

- https://uniwebsidad.com/libros/css/capitulo-2/selectores-basicos 

- https://uniwebsidad.com/libros/css/capitulo-2/selectores-avanzados

- https://developer.mozilla.org/es/docs/Web/CSS/Selectores_CSS#Selectores_básicos 

- https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors#Basic_selectors

#### 2. Selectores agrupados

**Lista de selectores (x, y)**: Se pueden usar varios selectores básicos juntos, para definir propiedades que efecten a todos. Para ello, corresponde separar con coma cada selector. Ejemplo: `h1, h2, h3, h4, h5, h6 {…}` será una regla que se aplicará a todos los encabezados posibles (que en HTML van del `<h1>…</h1>` al `<h6>…</h6>`).

No deben confundirse los selectores agrupados con la combinación descentente de selectores que veremos a continuación.

#### 3. Selectores combinados

**Combinador de descendentes (x y)**: A diferencia de los agrupados, acá se coloca uno después de otro, sin usar comas entre ellos (solo un espacio), para indicar que se quiere afectar al segundo elemento, que está dentro del primero. Ejemplo: `figure figcaption{}` apuntará al elemento `<figcaption>…</figcaption>` dentro del elemento `<figure>…</figure>`.

**Combinador de hermanos adyacentes (x + y)**: El combinador `+` selecciona el segundo elemento si es que sigue directamente al primero. Ejemplo: `h2 + p{…}` apuntará al elemento `<p>…</p>` que sigue inmediatamente después del `<h2>…</h2>`, sin afectar a los `<p>…</p>` sucesivos. 

**Combinador general de hermanos (x ~ y)**: El combinador `~` hace algo parecido a combinador de los hermanos adyacente, sin exigir que uno se encuentre inmediatemente después del otro. 

**Combinador de hijos (x > y)**: El combinador `>` selecciona los elementos que son hijos directos del primero. Ejemplo: `ul > li {…}` apuntará a todos los elementos `<li>…</li>` que son hijos directos de un elemento `<ul>…</ul>`.

Favor busca la definición y otros ejemplos de los selectores combinados en: 

- https://developer.mozilla.org/es/docs/Web/CSS/Selectores_CSS#Combinadores

- https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors#Combinators

- https://uniwebsidad.com/libros/css/capitulo-2/selectores-avanzados

#### 4. Pseudo selectores

**Selectores de estado**: El nombre del selector es seguido por dos puntos y una palabra determinada. Así, por ejemplo, `a:hover{…}` apunta a un elemento de vínculo (a de *anchor*) cuando el mouse esté encima suyo. Otras posibilidades comunes, además del `:hover`, son `:active` y `:visited`

**Pseudo clases**: Son muy parecidos a los selectores de estado, tanto que se pueden incluir dentro de una misma categoría. Si aquí las separamos es por diferenciar estado de circunstancia, entendiendo que `:hover` puede ser el estado (que responde a una interacción) donde aplica una regla, pero `:last-of-type ` es la circunstancia del elemento de estar al final, donde se le aplica una regla.

**Pseudo elementos**: El nombre del selector seguido de dos puntos (o doble dos puntos) y una palabra determinada permite apuntar entidades más allá de los elementos HTML, para poder asignarles reglas CSS. 

Favor buscar la definición y los pseudo selectores estándares en: 

- https://uniwebsidad.com/libros/css-avanzado/capitulo-3/pseudo-clases 

- https://developer.mozilla.org/es/docs/Web/CSS/Pseudo-classes

- https://uniwebsidad.com/libros/css-avanzado/capitulo-3/pseudo-elementos

- https://developer.mozilla.org/es/docs/Web/CSS/Pseudoelementos

#### 5. Regla @media

Hay distintos tipos de [reglas-at (@)](https://developer.mozilla.org/es/docs/Web/CSS/At-rule). En el `estilo.css` de esta clase se están utilizando las reglas-at @import y [@media](https://developer.mozilla.org/es/docs/Web/CSS/@media#Media_features). Para explicar la segunda, observemos un ejemplo:   

```
body{ color:white; background-color:black; }

@media screen and (orientation:portrait){

	body{ color:black; background-color:white; }

}
```

Podemos establecer una descripción para todo lo que se ve en la ventana del navegador cuando muestra el cuerpo del html (`<body>…</body>`), y esa descripción la puedo cambiar según un subconjunto de declaraciones anidadas y condicionaldas. En este caso, la condición  es que la orientación de la pantalla del navegador sea vertical (como pasa en los dispositivos móviles, que ser observan, por lo general, en sentido contrario al apaisado).

- - - - - - - - - - - - -

#### Ejercicio:

| No.   | Nombre                 | GitHub Page                            |
|:-----:|:-----------------------|:---------------------------------------|
| 1	| MARÍA PAZ CONCHA       | … |
| 2    	| OLGA F. VIO            | … |
| 3	| MATÍAS HAGEN           | https://matihagene.github.io/clase-08/ |
| 4	| MARÍA FRANCISCA HEPP   | … |
| 5	| MARIA ELIANA INFANTE   | … |
| 6	| MAGDALENA LABARCA      | … |
| 7	| VANESSA MULLER         | … |
| 8	| JANA MÜLLER            | … |
| 9	| MURIEL MUÑOZ           | … |
| 10	| ROSARIO OLIVARES       | … |
| 11	| AMPARO ORTÚZAR         | … |
| 12	| VALERIA PARRAGUEZ      | … |
| 13	| FRANCISCO PEZOA        | … |
| 14	| FRANCISCA PURCELL      | … |
| 15	| MARTINA RIVAS          | … |
| 16	| LISA SAEZ              | … |
| 17	| CECY SOTO              | … |

- - - - - - - - - - - - -

#### Referencias

- **[CSS3 Quick Referencia Guide](https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/d7fb67af-5180-463d-b58a-bfd4a220d5d0/css3-cheat-sheet.pdf)**

- [Guía de desarrollo en CSS](https://developer.mozilla.org/es/docs/Web/Guide/CSS)

- [HTML & CSS - W3C](https://www.w3.org/standards/webdesign/htmlcss)

- [Starting with HTML + CSS](https://www.w3.org/Style/Examples/011/firstcss.en.html)

- [The Elements of Typographic Style Applied to the Web](http://webtypography.net/)

- - - - - - - - - - - - -

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-09)
