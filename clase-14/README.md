## Diseño y Nuevos Medios v10 

### Clase 14 → Miércoles 10 de junio, 2020

### Bootstrap
Ya nos hemos referidos a los [ejemplos](https://getbootstrap.com/docs/4.5/examples/), [*themes*](https://startbootstrap.com/themes/landing-pages/) y [*templates*](https://startbootstrap.com/templates/landing-pages/), de [Bootstrap](https://getbootstrap.com/), nos permiten resolver de modo muy rápido un sitio web profesional o prototipo avanzado de aplicación web.

Echando mano al [ejemplo “Album”](https://getbootstrap.com/docs/4.5/examples/album/), del sitio web oficial de [Bootstrap](https://getbootstrap.com/), vamos a explorar el uso del Modal de Bootstrap, además de la bibliotecas [jQuery](https://jquery.com/) y [PapaParse](https://www.papaparse.com/).

**Modal o Modal window**

Modal o Modal window (escrito de tal manera en inglés), es un elemento que deshabilita la ventana principal, bloqueando sus funciones para exigir la atención en lo que se ofrece después de un clic. Se diferencian del Pop up o ventana emergente por su uso y programación. 

El Pop up interrumpe la navegación con el despliegue intrusivo de nuevas páginas, mientras que un Modal complementa la navegación, entregando más detalles, solicitando confirmaciones o advirtiendo de errores con el despliegue de elementos que ya son contenidos en la misma página, pero que permanecen ocultos. 

Boostrap ofrece el [Modal](https://getbootstrap.com/docs/4.5/components/modal/) como un componente, que se resuelve con HTML, CSS y JS ya preparado, con una estructura que contiene, en distintos niveles, las siguientes clases para las divisiones (`div`):

```
.modal
— .modal-dialog
— — .modal-content
— — — .modal-header
— — — .modal-body
— — — .modal-footer
```

Para continuar, lo primero será solicitarles que revisen las indicaciones en la misma página de Bootstrap, donde encuentran más detalles sobre el uso de este componente: https://getbootstrap.com/docs/4.5/components/modal/ y luego descarguen lo contenido en esta carpeta. Al revisar el modo en que se construye cada Modal, en donde se despliega el detalle de los arquetipos provisorios de usuarios (protopersonas) que ustedes redactaron en [la clase recién pasada](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-13), notarán que se está aprovechando la biblioteca https://www.papaparse.com/ para ir por un CSV que contiene todas sus respuestas a la encuesta de la semana recién pasada. 

También se está aprovechando jQuery, para [esconder](https://api.jquery.com/hide/) y [mostrar](https://api.jquery.com/show/) algunos trabajos según se plantee fundamental el optimizarlos para smartphone, tablet o desktop.

Habiendo revisado lo indicado hasta este punto, les solicito crear su repositorio de GitHub de la `/clase-14`, subir los contenidos sin modificaciones, y enviar correo a profesor@faco.cl, indicando la URL de su GitHub Page. La recepción de tales correos me dará la indicación para iniciar un nuevo [Meet](https://meet.google.com/).

- - - - - - 

#### Referencias:

- [¿Cuál es la diferencia entre un modal, un pop up, un pop over y un light box?](https://blog.ida.cl/diseno/ldiferencia-modal-pop-up-pop-over-light-box/)

- [Curso Gratuito de Bootstrap](https://codigofacilito.com/cursos/bootstrap)

- [Bootstrap 4 Tutorial](https://www.w3schools.com/bootstrap4/default.asp)

- - - - - - - 

###### [SIGUIENTE CLASE →](https://github.com/profesorfaco/dno037-2020/tree/gh-pages/clase-15)
