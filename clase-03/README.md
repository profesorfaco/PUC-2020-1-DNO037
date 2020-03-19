## Diseño y Nuevos Medios v10

### Clase 3 → Miércoles 25 de marzo, 2020

#### Tipos de datos

Si compartiera con ustedes el número 18261884, sin contexto alguno, resultaría inútil. Pero sería distinto de la siguiente manera: 

| País      |  Población       | Superficie     |
|:----------|:-----------------|:---------------|
| Chile     | 18261884         | 756102         |

Entendiendo cómo funciona una tabla, ustedes cuentan con una clara orientación para la utilización de tal número como información sobre algo concreto: La población en Chile. 

Además del dato de la población de Chile, contamos con su superficie. Si dividimos el primer dato por el segundo, obtenemos [la densidad de la población](https://es.wikipedia.org/wiki/Densidad_de_población) en Chile. El resultado de aquella división es 24,15267252.

Los números 18261884 y 24,15267252 tienen una diferencia que corresponde señalar al momento de disponerlos para su tratamiento en computación: 

- **18261884** es un número entero, un `int` (del inglés *integer*) en varios lenguajes de programación.

- **24,15267252** es un número de coma flotante, un `float` (del inglés *floating point number*) en varios lenguajes de programación.

A estos dos tipos de datos numéricos, podemos agregar otros tipos de datos: 

- **true** o **false** como las dos opciones posibles de un [tipo de dato lógico](https://es.wikipedia.org/wiki/Tipo_de_dato_l%C3%B3gico) (bool: *boolean*)

- **"A"** como un carácter (char: *character*)

Podrán notar que en el tipo de dato numérico y booleano no se usaron comillas, pero en el caso del caracter sí se utiliza. 

Mencionamos `int`, `bool`, `char` y `float` porque son palabras reservadas en [C++](https://es.wikipedia.org/wiki/C%2B%2B) para **declarar que una variable que almacenará cierto [tipo de dato](https://beginnersbook.com/2017/08/cpp-data-types/)**. 

**En el contexto computacional, una variable debe entenderse como un espacio en la memoria del computador donde se almacenará un dato que puede variar en la ejecución del programa del que sea parte.**

- - - - - - - - - - - - - - - - -

#### Datos en JS

**En programación, los datos puede ser contenidos en las variables. En JS las variables se pueden crear con una única palabra reservada,`var`**:

```
var a = 18261884;

var b = 24,15267252;

var c = false;

var d = "Falso como beso de Judas";

var e = ["Pedro", "Juan", "Santiago", "Santiago el Menor", "Felipe", "Bartolomé", "Judas Tadeo", "Simón", "Andrés", "Mateo", "Tomás", "Judas Iscariote"];

var f = { mom: "Luann", dad:"Kirk", children:"Milhouse" };

var g = { mom: "Marge", dad:"Homer", children:["Bart", "Lisa", "Maggie"] };

var h = [{ mom: "Luann", dad:"Kirk", children:"Milhouse" }, { mom: "Marge", dad:"Homer", children:["Bart", "Lisa", "Maggie"] }];

```

Las variables `a`, `b` y `c` no requieren comillas. La variable `d`, que contiene una cadena de caracteres (*string*) usa comillas. La variable `e`, que contiene un arreglo, usa paréntesis cuadrado y cada elemento, por tratarse de un *string*, usa comillas. La variable `f`que contiene un objeto, usa paréntesis de llave que en su interior contiene pares separados por comas. Las `g` y `h` son mezclas posibles. 

### Ciclos y condiciones

Pendiente…
Para mayor comprensión de estos asunto, convendría revisar:

- 

- 

Una vez terminada las lecturas, favor selecciona un país del cinturón del Fuego del Pacífico que NO sea Chile – https://es.wikipedia.org/wiki/Cinturón_de_Fuego_del_Pacífico

Revisa si el país seleccionado está incluido, con su nombre en inglés, entre los registros de https://pomber.github.io/covid19/timeseries.json - Por ejemplo, Japan - Deja que se cargue completamente antes de buscar el nombre (puede demorar). Prefiere usar cmd + F o Crtl + F para facilitarte la búsqueda.

Anota el nombre del país tal y como aparezca en el JSON recién referido. Envía un correo indicando ese nombre y como respuseta recibirás los archivos para completar el ejercicio que corresponde dejar en tu repositorio para clase-03


#### Referencias

- [{ } myjson - A simple JSON store for your web or mobile app](http://myjson.com/)

- [A collection of small corpuses of interesting data for the creation of bots and similar stuff](https://github.com/dariusk/corpora)

- [crossorigin.me, the free CORS proxy for everyone!](https://corsproxy.github.io/)

- [Fundamentos de JavaScript](https://developer.mozilla.org/es/docs/Learn/Getting_started_with_the_web/JavaScript_basics)

- [JavaScript for Beginner](http://xahlee.info/js/js_basics_index.html)

- [JSONLint - The JSON Validator](https://jsonlint.com/)

- [Open Notify - Open APIs From Space](http://open-notify.org/)

- [USGS - GeoJSON Summary Format](https://earthquake.usgs.gov/earthquakes/feed/v1.0/geojson.php)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-04)
