## Diseño y Nuevos Medios v10 

### Clase 07 → Miércoles 22 de abril, 2020

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

- - - - - 

#### Referencias:

- [CSS3 Quick Referencia Guide](https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/d7fb67af-5180-463d-b58a-bfd4a220d5d0/css3-cheat-sheet.pdf)

- [Guía Breve de CSS](https://www.w3c.es/Divulgacion/GuiasBreves/HojasEstilo)

- [Guía de desarrollo en CSS](https://developer.mozilla.org/es/docs/Web/Guide/CSS)

- [HTML & CSS - W3C](https://www.w3.org/standards/webdesign/htmlcss)

- [Starting with HTML + CSS](https://www.w3.org/Style/Examples/011/firstcss.en.html)

- [The Elements of Typographic Style Applied to the Web](http://webtypography.net/)


- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-08)
