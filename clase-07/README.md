## Diseño y Nuevos Medios v10 

### Clase 07 → Miércoles 22 de abril, 2020

La clase [recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06) juntamos todo lo trabajado hasta la fecha [en un único sitio web](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06#resultados), publicado en GitHub Pages. Para hacerlo, tuvimos que poner atención especial a los lenguajes [HTML](https://developer.mozilla.org/es/docs/Web/HTML) y [CSS](https://developer.mozilla.org/es/docs/Web/CSS). En el ejercicio, notamos que NO da lo mismo dónde abrir y cerrar cada elemento HTML. También notamos que un mismo estilo CSS puede ayudarnos a definir cómo se deben ver varias páginas web.

- - - - - - - - 

#### HTML + CSS, con énfasis en el primero

Hoy vamos a ponerle más atención a HTML (HyperText Markup Language; Lenguaje de Marcado de Hipertextos), un lenguaje descriptivo que es interpretado por los navegadores que nos muestran los sitios o las aplicaciones Web, al modo que ha sido desde el principio de la Web, una idea desarrollada en las horas extras de Berners-Lee en el CERN (Organización Europea para la Investigación Nuclear). 

**Favor revisen esta charla TED del año 2009 - https://www.ted.com/talks/tim_berners_lee_the_next_web** - Terminarán de ver esa charla cerca de las 10:20 AM (hay dos charlas TED suyas, más recientes, que no es necesario ver por ahora).

Después de vista la charla TED del año 2009 de Sir Timothy John Berners-Lee, podrían quedar pensando en *data*. Un primer tipo de *data* al que le vamos a poner atención será el metadato que corresponde incorporar en cada página web; otro dato será la correscta descripción de las imágenes; y el tercer dato será el mejor uso de los nuevos elementos estructurales introducidos en HTML5. 

#### 1. Metadatos

En la clase [recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-06), ya se adelantó cuáles son los [metadatos que Google entiende](https://support.google.com/webmasters/answer/79812?hl=es). A ello podemos **agregar una herramienta que permite obtener metadatos para redes sociales de manera más sencilla: https://megatags.co/** 

Para comprender de qué se trata cada metadato generado automáticamente, pueden revisar en el mismo sitio web: 

- https://megatags.co/reference/#tabs-facebook

- https://megatags.co/reference/#tabs-twitter

Favor tómate hasta las 10:40 AM para revisar este asunto.

#### 2. Imágenes

Trabajando con [p5.js](https://p5js.org/es/), le sacamos mucho provecho al elemento [`<canvas></canvas>`](https://developer.mozilla.org/es/docs/Web/Guide/HTML/Canvas_tutorial). Ahora corresponde aprender sobre otros elemento mucho más sencillo que nos permite agregar imágenes a las páginas web. **Para partir por `<img>` es necesario que revisen: https://developer.mozilla.org/es/docs/Learn/HTML/Multimedia_and_embedding/Images_in_HTML**

Ya podrían estar dando las 11:00 AM, pero no es necesario apurarse. Favor revisen las referencias propuestas con calma, y vayan apuntando las preguntas que vayan surgiendo.

#### 3. Nuevos elementos estructurales en HTML5

Ahora vamos a poner la atención sobre los nuevos elementos estructurales que definen características específicas para páginas web con una semántica mucho más precisa que la disponible en HTML 4, para ellos **corresponde consultar: 
https://mosaic.uoc.edu/ac/le/es/m8/ud2/index.html**

- - - - - - - - - -

Si llegas a este punto antes de las 11:30 AM, vas a muy buen ritmo. Recomendaría estar muy cerca de la hora recién indicada para dar aviso, vía correo electrónico (a profesor@faco.cl), de que ya estás lista/o para la parte práctica de esta clase; en ese correo que coresponde enviar, favor indica la dirección de tu repositorio ya creado para la `clase-07`. Ese repositorio debe contener nada más que el `README.md` (podrías transcribir en el README tus preguntas o apuntes, para hacerlo conviene mirar estas referencias de [`.md` - Markdown](https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet)); yo responderé a cada correo enviando documentos e indicaciones para publicar un ejercicio en tal repositorio. Además, les indicaré cómo contactarnos un rato para resolver dudas que podrían haber apuntado durante su revisión de los 3 puntos: metadatos, imágenes y nuevos elementos estructurales en HTML5.

#### Ejercicio

Vamos a modificar dos páginas web ya contenidas en la carpeta de esta clase (favor copia todos los archivos, menos el `README.md`)

**Partamos por `page.html`**

Para darle un sentido a tal página, vamos a copiar y pegar algunos datos reales. Utilicemos el resumen ejecutivo del Índice de Calidad de Vida Urbana (ICVU) 2019 - http://estudiosurbanos.uc.cl/images/publicaciones/documentos-de-trabajo/ICVU_2019_Resumen_Ejecutivo.pdf

- Hay definiciones para 6 dimenesiones en la cuarta página del informe en PDF, y en el HTML hay unas etiquetas indicando el lugar de una lista de definiciones. 

- Hay tablas en el informe (pp. 6-8). Entre los datos de la tabla, selecciona 10 comunas, considerando en cada una de las seleccionadas su nombre, región e índice ICVU 2019. Traspasa la selección al lugar que corresponda en el HTML.

Habiendo hecho esto, favor cambia los textos simulados (Loren ipsum…) por texto real, que puedes copiar del mismo informe ya referido. **No cambies ni borres las etiquetas HTML, reemplaza su contenido**.

**Y sigamos por `index.html`**

Para darle un sentido a esta página de portada, tendrán que buscar una noticia, artículo o datos referidos a la manera en que el Coronavirus está afectando a las distintas comunas del país, sea que hayan o no tenido cuarentena total obligatoria; considera que `page.html` sirvió para ofrecer "más información".

Copia y pega datos, reemplazando todo el texto simulado (Loren ipsum…) y otros contenidos que no tengan mucho sentido (los encabezados por ejemplo, cámbialos por el título que corresponda a lo que estás proponiendo; la imagen que es toda gris debería cambiar por una pertinente al texto). **Pero no modifiques ni borres las etiquetas HTML, aprovéchalas. Puedes agregar más etiquetas de las mismas si lo estimas conveniente.**


| No.   | Nombre               | GitHub Page        |
|:-----:|:---------------------|:-------------------|
| 1	    | MARÍA PAZ CONCHA       | https://mpconcha.github.io/clase-07/ |
| 2    	| OLGA F. VIO            | https://caracolga.github.io/clase07/ |
| 3	    | TRINIDAD GONZÁLEZ      | — |
| 4	    | MATÍAS HAGEN           | https://matihagene.github.io/clase-07/ |
| 5	    | MARÍA FRANCISCA HEPP   | https://franhepp.github.io/clase-07/ |
| 6	    | MARIA ELIANA INFANTE   | https://maritainfante.github.io/clase-07/ |
| 7	    | MAGDALENA LABARCA      | https://maidalw.github.io/clase-07/ |
| 8	    | VANESSA MÜLLER         | https://vymuller.github.io/clase-07/ |
| 9	    | JANA MÜLLER            | https://janakristin.github.io/clase-07/ |
| 10	  | MURIEL MUÑOZ           | https://murimu.github.io/clase-07/ |
| 11	  | MARÍA TRINIDAD NORIEGA | — |
| 12	  | ROSARIO OLIVARES       | https://rosarioof.github.io/Clase-07/ |
| 13	  | AMPARO ORTÚZAR         | — |
| 14	  | VALERIA PARRAGUEZ      | https://valeriaparraguezojeda.github.io/clase-07/ |
| 15	  | FRANCISCO PEZOA        | https://panshios.github.io/clase-07/ |
| 16	  | FRANCISCA PURCELL      | https://fmpurcell.github.io/clase-07/ |
| 17	  | MARTINA RIVAS          | https://mrivas29.github.io/clase-07/ |
| 18	  | LISA SAEZ              | — |
| 19	  | DAVID SÁNCHEZ          | — |
| 20	  | CECY SOTO              | https://cecysoto.github.io/clase-07/ |

- - - - - - - 

####Referencias

- **[CSS3 Quick Referencia Guide](https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/d7fb67af-5180-463d-b58a-bfd4a220d5d0/css3-cheat-sheet.pdf)**

- [Guía Breve de CSS](https://www.w3c.es/Divulgacion/GuiasBreves/HojasEstilo)

- [Guía de desarrollo en CSS](https://developer.mozilla.org/es/docs/Web/Guide/CSS)

- [HTML & CSS - W3C](https://www.w3.org/standards/webdesign/htmlcss)

- [Starting with HTML + CSS](https://www.w3.org/Style/Examples/011/firstcss.en.html)

- [The Elements of Typographic Style Applied to the Web](http://webtypography.net/)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-08)
