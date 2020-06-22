## Diseño y Nuevos Medios v10 

### Breve intro a PHP → Miércoles 24 de junio, 2020

[PHP](https://www.php.net/manual/es/getting-started.php) es un lenguaje de programación de código abierto que puede incrustarse en el HTML para ser ejecutado en el [servidor web](https://developer.mozilla.org/es/docs/Learn/Common_questions/Que_es_un_servidor_WEB) que luego envía el resultado de su ejecución al cliente. 

Por ejemplo, en su editor de código fuente pueden escribir un documento HTML típico, que entre sus líneas contenga:

```
<?php $nombre = "Ámbar";?> 
<p>Su nombre es <?php print $nombre;?></p>
```

Su documento debería ser guardando con extensión `*.php`, así como `index.php` en lugar de `index.html`, para luego ponerlo en un servidor. 

Cuando un cliente solicite tal `index.php` al servidor, recibirá lo siguiente:

```
<p>Su nombre es Ámbar</p>
```

Como se puede notar en el ejemplo: 

- El código original "se queda en el servidor", lo que se envía es el resultado.

- Para que sea identificado por el servidor como tal, el lenguaje PHP se escribe entre `<?php` y `?>`. 

- Las variables se declaran con un signo `$`, sin dejar espacio entre el mismo signo y el nombre de la variable.

- El lenguaje ofrece una [serie de funciones](https://www.php.net/manual/es/funcref.php) que se organizan en tipos tales como [Funciones de strings](https://www.php.net/manual/es/ref.strings.php), donde se encuentra el [`print`](https://www.php.net/manual/es/function.print.php).

Como PHP fue por muchos años la opción más popular para la [programación de páginas web dinámicas](https://developer.mozilla.org/es/docs/Learn/Server-side), el número de funciones que ofrece es amplísimo y el modo en que se escribe podría verse un poco anticuado (si se compara con [Ruby](https://www.ruby-lang.org/es/documentation/) o [Python](https://www.python.org/about/))

- - - - - - - - - - - - - - - 

Para comenzar a hacer algunas pruebas con el lenguaje, pueden usar algunos servicios en línea:

- http://www.writephponline.com/

- http://phptester.net/

Para hacer desarrollo y pruebas en sus computadores, conviene contar con uno de los siguientes:

- https://www.mamp.info/en/downloads/ 

- https://www.apachefriends.org/es/index.html

- https://www.wampserver.com/en/

Si instalan la primera de las opciones, podrán buscar entre los archivos de programas la carpeta de MAMP, al abrirla encontrarán la carpeta `htdocs` y allí dentro podrían colocar los archivos que se contienen dentro de esta carpeta para poder hacer las siguientes pruebas: 

1. Armar una página incluyendo distintas partes. 

2. Hacer consulta a documento CSV en línea. 

3. Generar distintas página con despliegue de detalles desde una única estructura.

4. Crear un documento que despliegue, automáticamente, las imágenes que se encuentren en una carpeta.

5. Enviar un correo desde un formulario de contacto.

- - - - - - - - - - - - - - - 

###### [IR A CLASE 16 →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-16)
