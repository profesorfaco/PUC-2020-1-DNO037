## Diseño y Nuevos Medios v10 

### Clase 08 → Miércoles 29 de abril, 2020

#### Primeras instrucciones

Esta es la tercera clase dedicada a HTML + CSS. Ya hemos realizado dos ejercicios para entender esta relación de ambos lenguajes de descripción: 

- Clase 06 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06#ejercicio

- Clase 07 → https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-07#ejercicio

En la carpeta dispuesta para la clase de hoy, y que debes descargar a la brevedad posible, no se incluye un `index.html`. Por favor reutiliza el `index.html` que preparaste para la clase recién pasada, haciéndole un par de ajustes: uno a nivel de navegación (`<nav></nav>`) y otro a nivel de pie de página (`<footer></footer`). Para los ajustes, guíate con tales elementos dentro de las páginas a descargar. 

Habiendo hecho el par de ajustes, y reuniendo todo dentro de una única carpeta, podrás revisar este sitio web con tu navegador y notar que hay textos simulados (Loren ipsum…) que corresponde reemplazar con lo más partinente a lo que no está simulado en `page-1.html`, `page-2.html` y `page-3.html`. También podrás notar que hay algunos "nuevos trucos" con los que se generan las tablas en la `page-2.html`  y el gráfico en `page-3.html`.

Cuando los ajustes en `index.html` y reemplazos de contenido en `page-1.html`, `page-2.html` y `page-3.html` estén listos, y ya hayas encontrado los "nuevos trucos" que aprovechan algunas bibliotecas de JavaScript ([jQuery](https://jquery.com/), [Papa Parse](https://www.papaparse.com/), [Charts.js](https://www.chartjs.org/)), **favor sube todo a tu repositorio de la `/clase-08` y envía correo a profesor@faco.cl con indicación de la URL de la GitHub Page correspondiente. Tienes hasta las 11.00 horas para hacerlo**. Como respuesta a tu correo, se te indicará cómo continuar con la clase que se enfocará en CSS, e incluye una pequeña referencia a JavaScript (por hacer memoria de lo tratado hasta la [clase 05](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05)).

- - - - - - - - - - - - -

#### HTML y CSS, con énfasis en el segundo

**Hoy vamos a ponerle más atención a CSS (Cascading Style Sheets; Hojas de estilo en cascada)**, un lenguaje utilizado para describir la presentación de documentos escritos con Lenguaje de Marcado ([HTML](https://developer.mozilla.org/es/docs/Glossary/HTML), [XML](https://es.wikipedia.org/wiki/Extensible_Markup_Language), [SVG](https://developer.mozilla.org/es/docs/Web/SVG), etc.)

Como se escribió [hace un par de clases](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06#css), la unidad más básica de CSS es la regla. Cada regla se inicia con un(os) [selector(es)](https://developer.mozilla.org/es/docs/Web/CSS/Referencia_CSS#Selectores) y  luego contiene, entre paréntesis de llave `{…}`, un [bloque de declaraciones](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Bloques_de_declaraciones_en_CSS). Una [declaración](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Declaraciones_de_CSS) es separada de otra mediante punto y coma `;`. Cada declaración se compone de una [propiedad](https://www.w3.org/TR/css-2018/#properties) y su correspondiente valor, habiendo casos de [propiedades abreviadas](https://developer.mozilla.org/es/docs/Web/CSS/Shorthand_properties) a las que corresponden varios valores:

```
selector{
  propiedad:valor;
  propiedad:valor valor valor;
}

selector{ propiedad:valor; propiedad:valor valor valor;}
```

- - - - - - - - - - - - -

#### Ejercicio:

| No.   | Nombre                 | GitHub Page        |
|:-----:|:-----------------------|:-------------------|
| 1	    | MARÍA PAZ CONCHA       | … |
| 2    	| OLGA F. VIO            | … |
| 3	    | MATÍAS HAGEN           | … |
| 4	    | MARÍA FRANCISCA HEPP   | … |
| 5	    | MARIA ELIANA INFANTE   | … |
| 6	    | MAGDALENA LABARCA      | … |
| 7	    | VANESSA MULLER         | … |
| 8	    | JANA MÜLLER            | … |
| 9	    | MURIEL MUÑOZ           | … |
| 10	  | ROSARIO OLIVARES       | … |
| 11	  | AMPARO ORTÚZAR         | … |
| 12	  | VALERIA PARRAGUEZ      | … |
| 13	  | FRANCISCO PEZOA        | … |
| 14	  | FRANCISCA PURCELL      | … |
| 15	  | MARTINA RIVAS          | … |
| 16	  | LISA SAEZ              | … |
| 17	  | CECY SOTO              | … |

- - - - - - - - - - - - -

#### Referencias

- **[CSS3 Quick Referencia Guide](https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/d7fb67af-5180-463d-b58a-bfd4a220d5d0/css3-cheat-sheet.pdf)**

- [Guía Breve de CSS](https://www.w3c.es/Divulgacion/GuiasBreves/HojasEstilo)

- [Guía de desarrollo en CSS](https://developer.mozilla.org/es/docs/Web/Guide/CSS)

- [HTML & CSS - W3C](https://www.w3.org/standards/webdesign/htmlcss)

- [Starting with HTML + CSS](https://www.w3.org/Style/Examples/011/firstcss.en.html)

- [The Elements of Typographic Style Applied to the Web](http://webtypography.net/)

- - - - - - - - - - - - -

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-09)
