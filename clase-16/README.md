## Diseño y Nuevos Medios v10 

### Clase 16 → Miércoles 24 de junio, 2020

- - - - - - - - -

#### EXÁMEN ÁGIL

[La clase recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-15) se evaluó una entrega temprana para el desarrollo continuo de un sitio web, cuyo éxito dependerá de iteraciones que, a su vez, dependerán de colaboración, diálogo y capacidad de respuesta ante el cambio; **este modo de trabajo se alinea con [los principios del manifiesto ágil](https://agilemanifesto.org/iso/es/principles.html)**. Manifiesto en el que confluyen distintas alternativas de desarrollo de software que, por resolver [una crisis](https://es.wikipedia.org/wiki/Crisis_del_software), sacudieron el [desarrollo en cascada](https://es.wikipedia.org/wiki/Desarrollo_en_cascada) que echaba mano a documentos, planos, modelos, moldes, materias primas, líneas de producción, vistos buenos, supervisiones de implementación, evaluación, etc.

Por tal sacudida, y la propagación del uso del software, se han incorporado conceptos tales como "Mínimo Producto Viable" (MPV; en inglés MVP de [Minimum Viable Product](https://www.youtube.com/watch?v=ixpphYTDiOM)); concepto que implica el trabajo justo y necesario para obtener el máximo de *feedback* en cada iteración, y no corresponde confundir con prototipo.

Antes de escribir la primera línea de código del MPV, bien podemos usar **algunas técnicas que permiten alinear la toma de decisiones en contextos más o menos alejados del computador**:

- **Proto-persona** - https://www.dtelepathy.com/blog/philosophy/how-to-make-proto-pesonas

- **User Story** - https://www.mountaingoatsoftware.com/agile/user-stories

- **Paper Prototyping** - https://medium.com/digital-experience-design/a-guide-to-paper-prototyping-testing-for-web-interfaces-49e542ba765f

- **Wireflow** - https://www.nngroup.com/articles/wireflows/

- **Style Guide** - http://styleguides.io/examples

(Estas y otras técnicas son examinadas en detalle en el OPR de [Usabilidad y Nuevos Medios](http://catalogo.uc.cl/index.php?tmpl=component&option=com_catalogo&view=programa&sigla=dno046); como Diseño y Nuevos Medios, tal OPR es parte del [Certificado Académico Interdisciplinario en Desarrollo de Productos y Servicios Digitales](http://formaciongeneral.uc.cl/certificados-academicos/interdisciplinarios/arquitectura-diseno-y-estudios-urbanos/escuela-de-diseno/desarrollo-de-productos-y-servicios-digitales))

- - - - - - - - - - - - - - - - - - - - - - - - - -

#### TIPS DE CIERRE

Complementando lo enviado a sus correos, corresponde considerar:

Por razones de optimización en el despliegue (velocidad), no es tan recomendable usar el `@import ('…')`; pero, por ahora, que trabajamos con páginas estáticas, que no se preparan del lado del servidor (de modo dinámico, sea con PHP, Ruby o Python), resulta útil para evitarnos repetir en cada pagina ese `<style…></style>` que tendría que ir por ellas. Nos evita fallas derivadas del olvidar repetirlo.

Si se quiere revisar aquello que nos permiten el trabajo con programación del lado del servidor, puedes revisar una breve intro a PHP.

- - - - - - - - - - - - - - - - - - - - - - - - - -



