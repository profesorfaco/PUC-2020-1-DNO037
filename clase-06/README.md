## Diseño y Nuevos Medios v10 

### Clase 06 → Miércoles 15 de abril, 2020

#### Primeras instrucciones

El presente README.md introduce a un par de lenguajes que ya veníamos aprovechando, pero aún no les prestábamos suficiente atención. 

Si revisan los ejercicios de clase [01](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-01#ejercicio), [02](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-02#ejercicio), [03](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-03#ejercicio) y [04](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-04#ejercicio), además de la evaluación en [clase 05](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-05#entregas), notarán que en todas hay HTML y CSS trabajando en conjunto, cada cual aportando desde su lugar. En algunos casos, ese lugar está bien definido, pero en otros casos, como el que sigue, parecen mezclarse un poco:

```
<div style="position:absolute; top:0; left:30vw; width:40vw; text-align:center; z-index:99999">
<p><strong>porcentaje de la población con contagio confirmado<br/><small><span style="color:#d32f2f">&#11044;</span> sobre 0,1% <span style="color:#fbc02d">&#11044;</span> entre 0,1% y 0,01% <span style="color:#388e3c">&#11044;</span> menos del 0,01%</small></strong></p>
</div>
```

A primera vista, esa mezcla podría resultar muy confusa. Pero se gana en claridad si reconocemos cada parte involucrada, y para ello lo primero será revisar las definiciones que siguen a continuación.

- - - - - - - - - - - - - - - -

#### HTML

HTML es Lenguaje de Marcado para Hipertextos (HyperText Markup Language), un lenguaje utilizado para describir (no para programar). 

[HTML5](https://developer.mozilla.org/es/docs/HTML/HTML5) es la versión más reciente de este lenguaje. 

El bloque constructivo más básico del HTML es el elemento. Cada elemento de HTML se escribe, generalmente, entre etiquetas:

```
<etiqueta>contenido</etiqueta>
```

Así, cada elementos HTML es un "sandwich", con las etiquetas como rebanadas de pan, y el contido como relleno. Con estos "sadwiches" definimos qué se ve en una página web. Por ejemplo:

```
<p>esto es un párrafo</p>
```

Aunque también hay elementos HTML que nos obligan a cambiar la analogía del sandwich por canapé:

```
<etiqueta>
```

Ejemplos de estos elementos como "canapé", son:

```
<meta>, <hr>, <br>, <img> 
```

Si extendemos la analogía, podemos decir que cada elemento, puede estar determinado por uno o varios atributos incluídos en su primera o única rebanada de pan; y cada atributo tiene su variable.

Como canapé:

```
<etiqueta atributo="variable">
```

Como sandwich:

```
<etiqueta atributo="variable">contenido</etiqueta>
```

Deben notar que atributos y variables se escriben en la primera etiqueta, la de apertura, nunca en la de cierre.

Hay una clase particular de "sandwiches" y "canapés" que se incluyen entre las etiquetas `<head></head>`, a estos se les conoce como Metadatos, y corresponde ponerles especial atención: [Metaetiquetas que Google entiende](https://support.google.com/webmasters/answer/79812?hl=es&hlrm=en#)

Entre las etiquetas `<body></body>`, mediante el uso de atributos y variables se convertir a un simple párrafo en uno que tenga las características de una clase "estudiante" y la identidad de "francisca".

```
<p class="estudiante" id="francisca">esto es un párrafo</p>
```

Estas variables, estudiante y francisca, por sí mismas no significan nada, en otro lugar habría que entregarles un significado.

Atributos y variables también nos permiten establecer vínculos y recursos. Así, por ejemplo, puedo establecer un recurso de imagen que se llama "selfie", que tiene extensión "jpg", e indicar que un clic en ella me "lleve" a Google:

```
<a href="http://www.google.cl"><img src="selfie.jpg"></a>
```
- - - - - - - - - - - - - - - -

#### CSS

CSS es Cascading Style Sheets (Hojas de Estilo en Cascada), un lenguaje utilizado para describir la presentación de documentos HTML. [CSS3](https://www.w3.org/TR/css-2018/#css-level-3) es la última evolución de este lenguaje.

Su bloque constructivo más básico es la regla. Cada regla se inicia con un(os) [selector(es)](https://developer.mozilla.org/es/docs/Web/CSS/Referencia_CSS#Selectores) y  luego contiene, entre paréntesis de llave `{…}`, un [bloque de declaraciones](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Bloques_de_declaraciones_en_CSS). Una [declaración](https://developer.mozilla.org/es/docs/Web/CSS/Syntax#Declaraciones_de_CSS) es separada de otra mediante punto y coma `;`. Cada declaración se compone de una [propiedad](https://www.w3.org/TR/css-2018/#properties) y su correspondiente valor, habiendo casos de [propiedades abreviadas](https://developer.mozilla.org/es/docs/Web/CSS/Shorthand_properties) a las que corresponden varios valores:

```
selector{
  propiedad:valor;
  propiedad:valor;
}
```

Con CSS podemos establecer que el elemento HTML `<h1>hola mundo</h1>` se presente con [Helvetica](https://www.w3schools.com/cssref/css_websafe_fonts.asp), [cuerpo de 2 **em**](https://www.w3schools.com/cssref/css_units.asp), y en [rojo](https://www.w3schools.com/colors/default.asp):

```
h1{
  font-family: Helvetica, sans-serif; 
  font-size: 2em;
  color: #FF0000;
}
```

Si en el HTML queremos afectar a `<body>todo lo visible dentro de la ventana</body>`, en CSS escribimos:

```
body{
  font-family:Helvetica, Arial, sans-serif;
  font-size: 1rem;
  color: rgba(55,55,55,0.75);  
}
```

Pero una regla CSS también puede apuntar a [una parte de un elemento HTML (pseudoelemento)](https://developer.mozilla.org/es/docs/Web/CSS/Pseudoelementos). Por ejemplo, si en el HTML queremos afectar a la primera línea de un `<p>párrafo<p>`, en CSS escribimos:

```
p::first-line{
  text-transform: uppercase;
}
```

Incluso podemos apuntar a [un estado especial del elemento (pseudoclase)](https://developer.mozilla.org/es/docs/Web/CSS/Pseudo-classes). Por ejemplo, si en el HTML queremos afectar a un `<a>vínculo<a>` mientras el mouse se posa encima, en CSS escribimos:

```
a:hover{
  text-decoration: underline;
}
```

Y podemos seguir agregando posibilidades.

Una regla CSS puede apuntar a cualquier elemento que tenga una clase (class) determinada. Así podemos afectar a un `<p class="estudiante">párrafo</p>`, una `<div class="estudiante">división</div>` o cualquier otro elemento:

```
.estudiante{
  border:5px solid rgba(255,255,255,1);
}
```

También podemos apuntar a cualquier elemento que tenga una identidad (id) determinada. La diferencia con el caso anterior, es que se recomienda entregarle a un único elemento una identidad:

```
#francisca{
  color:rgba(255,200,200,1);
}
```

**Ahora bien, para que cada regla CSS afecte al elemento HTML correspondiente, nos falta mencionar algo más: Cómo conectar a un conjunto de reglas CSS con un determinado conjunto de elementos HTML (sea parte de una o varias páginas HTML).**

La respuesta es doble, porque hay dos posibilidades: 

1. Incluyéndolas en la cabeza del documento HTML:

```
<style>
body{
  color:white;
  background:black;
  font-family:Helvetica, Arial, sans-serif;
  font-size:1em;
}
</style>
```

2. Vinculando un documento CSS independiente, dentro de la cabeza del documento HTML:

```
<link rel="stylesheet" href="estilo.css" type="text/css">
```
 
Habría una tercera posibilidad más de conectar un conjunto de reglas con un elemnto HTML, pero es poco eficiente y poco pulcra. Esta posibilidad es la de meter lenguaje CSS como variable de un atributo **style** en un elemento HTML:

```
<p style="color:red;">esto es un párrafo en rojo</p>
```
- - - - - - - - - - - - - - - -

#### HTML + CSS

**Estos dos lenguajes de descripción se relacionan y complementan, uno es "el qué" mientra el otro es "el cómo".** 

Aunque "el qué" puede prescindir de una forma particular, para mostrarse tal como le corresponde por defecto, "el cómo" necesita de estar relacionado con algo que se muestra. Dicho de otro modo, pueden encontrar HTML sin definiciones de CSS, y funciona (viéndose mal), pero un CSS sin HTML es descripción perdida.

Lo que haremos en esta clase será crear un repositorio `/clase-06` donde vamos a colocar todo lo que hemos hecho, o sea, cada archivo en repositorios (del 01 al 05) debe quedar en ella y al mismo nivel. 

Habrá un inconveniente: ¿Qué hacer con los archivos que se llaman igual? La respuesta: agrega un número que lo identifique. Por ejemplo, al `index.html` de la clase 1, cámbiale el nombre por `index-1.html`.

Cuando tengas el repositorio listo, favor envía un correo a profesor@faco.cl indicando la url de tu Github Page. En principio no funcionará, porque no habrá un `index.html` a secas, sin número, pero eso lo resolveremos en un siguiente paso, que te será informado como respuesta a tu correo.


- - - - - 

#### Referencias 

##### HTML

- [Introducción a HTML](https://developer.mozilla.org/es/docs/Learn/HTML/Introduccion_a_HTML)

- [HTML Tutorial | w3schools.com](https://www.w3schools.com/html/default.asp)

- [Element Index | HTML5 Doctor](http://html5doctor.com/element-index/)

- [HTML5 Cheat Sheet](https://websitesetup.org/HTML5-cheat-sheet.pdf)


##### CSS

- [CSS3 Quick Referencia Guide](https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/d7fb67af-5180-463d-b58a-bfd4a220d5d0/css3-cheat-sheet.pdf)

- [Guía Breve de CSS](https://www.w3c.es/Divulgacion/GuiasBreves/HojasEstilo)

- [Guía de desarrollo en CSS](https://developer.mozilla.org/es/docs/Web/Guide/CSS)

- [HTML & CSS - W3C](https://www.w3.org/standards/webdesign/htmlcss)

- [Starting with HTML + CSS](https://www.w3.org/Style/Examples/011/firstcss.en.html)

- [The Elements of Typographic Style Applied to the Web](http://webtypography.net/)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-07)
