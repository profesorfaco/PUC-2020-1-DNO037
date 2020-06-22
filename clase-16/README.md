## Diseño y Nuevos Medios v10 

### Clase 16 → Miércoles 24 de junio, 2020

- - - - - - - - -

#### EXÁMEN ÁGIL

[La clase recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-15) se evaluó una entrega temprana para el desarrollo continuo de un sitio web, cuyo éxito dependerá de iteraciones que, a su vez, requieren colaboración, diálogo y capacidad de respuesta ante el cambio; **este modo de trabajo se alinea con [los principios del manifiesto ágil](https://agilemanifesto.org/iso/es/principles.html)**. Manifiesto en el que confluyen distintas alternativas de desarrollo de software que, por resolver [una crisis](https://es.wikipedia.org/wiki/Crisis_del_software), sacudieron el [desarrollo en cascada](https://es.wikipedia.org/wiki/Desarrollo_en_cascada) que echaba mano a documentos, planos, modelos, moldes, materias primas, líneas de producción, vistos buenos, supervisiones de implementación, etc.

Por tal sacudida, y la propagación del uso del software, se han incorporado conceptos tales como "Mínimo Producto Viable" (MPV; en inglés MVP de [Minimum Viable Product](https://www.youtube.com/watch?v=ixpphYTDiOM)); concepto que implica el trabajo justo y necesario para obtener el máximo de *feedback* en cada iteración, y no corresponde confundir con prototipo.

Pero, antes de escribir la primera línea de código del MPV, aún podemos usar **algunas técnicas que permiten alinear la toma de decisiones en contextos más o menos alejados del computador**:

- **Proto-persona**: https://www.dtelepathy.com/blog/philosophy/how-to-make-proto-pesonas

- **User Story**: https://www.mountaingoatsoftware.com/agile/user-stories

- **Paper Prototyping**: https://medium.com/digital-experience-design/a-guide-to-paper-prototyping-testing-for-web-interfaces-49e542ba765f

- **Wireflow**: https://www.nngroup.com/articles/wireflows

- **Style Guide**: https://www.nngroup.com/articles/front-end-style-guides + http://styleguides.io/examples

(Estas y otras técnicas son examinadas en detalle en el OPR de [Usabilidad y Nuevos Medios](http://catalogo.uc.cl/index.php?tmpl=component&option=com_catalogo&view=programa&sigla=dno046); así como [Diseño y Nuevos Medios](https://github.com/profesorfaco/dno037-2020/blob/gh-pages/README.md), tal OPR es parte del [Certificado Académico Interdisciplinario en Desarrollo de Productos y Servicios Digitales](http://formaciongeneral.uc.cl/certificados-academicos/interdisciplinarios/arquitectura-diseno-y-estudios-urbanos/escuela-de-diseno/desarrollo-de-productos-y-servicios-digitales))

- - - - - - - - - - - - - - - - - - - - - - - - - -

#### TIPS DE CIERRE

Complementando lo enviado a sus correos, corresponde considerar:

**Para el uso de imágenes** - Sean cuidadosas/os con la relación tamaño-calidad-peso de cada imagen que utilicen. La diversidad de dispositivos hace difícil establecer un tamaño único, pero antes de ello conviene considerar otra diversidad: La de conexiones a Internet, para la que conviene ponerse en el peor de los casos. Simplificando mucho: X tiene una velocidad de bajada de 100kb/s. O sea, cada segundo apenas puede descargar 100kb… si ustedes meten una imagen de 1MB (1000 kb), les exigirán a X una espera de 10 segundos por ella. 

Ideal sería ajustar el ancho y alto de cada imagen según el [ratio](https://es.wikipedia.org/wiki/Relaci%C3%B3n_de_aspecto) que convenga a su diseño desplegado [en la pantalla en la que esperan el resultado óptimo](http://screensiz.es/). Prefieran formatos PNG o JPG, comprobando "al ojo" su calidad (si hacen esta comprobación en pantalla retina, mucho mejor), y cuiden que el peso de la imagen se indique en kb, porque cuando se indica en MB hablamos de miles de kb.

**Para el uso de Google Fonts** - Por razones de optimización en el despliegue (velocidad), no es tan recomendable usar el `@import ('…')`; pero, por ahora, que trabajamos con páginas estáticas, que no se preparan del lado del servidor (de modo dinámico, sea con [PHP](https://www.php.net/manual/es/intro-whatis.php), [Ruby](https://www.ruby-lang.org/es/documentation/) o [Python](https://www.python.org/about/)), resulta útil para evitarnos repetir en cada pagina ese `<link href="…" rel="stylesheet">` que tendría que ir por ellas. Nos evita fallas derivadas del olvidar repetirlo.

**Si quisieras revisar aquello que nos permite la programación del lado del servidor, puedes revisar una [breve intro a PHP](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-php)**.

- - - - - - - - - - - - - - - - - - - - - - - - - -



