## Diseño y Nuevos Medios v10 

### Breve intro a PHP → Miércoles 24 de junio, 2020

[PHP](https://www.php.net/manual/es/getting-started.php) es un lenguaje de programación de código abierto que puede incrustarse en el HTML para ser ejecutado en el [servidor web](https://developer.mozilla.org/en-US/docs/Learn/Common_questions/What_is_a_web_server) que luego envía el resultado de su ejecución al cliente. 

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

Como PHP lleva muchos años desarrollándose como opción popular para la programación de sitios web dinámicos, el número de funciones que ofrece es amplísimo, y el modo en que se escribe podría verse un poco anticuado (si se compara con [Ruby](https://www.ruby-lang.org/es/documentation/) o [Python](https://www.python.org/about/))


