# Ecommerce
Proyecto Ecommerce 


Ruteo y archivos principales:
El archivo principal, como siempre, es index.php. Todos los archivos con terminación en .php funcionan exactamente igual que aquellos que terminan en .html, la única diferencia es que cada ver que querramos usar una función de php sólo debemos abrir las etiquetas correspondientes (<?php y ?>). Al igual que en todas las páginas, dentro de la etiqueta <main> debería encontrarse todo lo que va en el cuerpo de la página, todo lo que va a mostrar el front-end. En la parte superior e inferior  de todos los archivos que se encuentren en esa misma altura del directorio (contacto.php, equipo.php, etc.) irían todos los elementos que se repiten en todas las páginas, todos ellos se encuentran en la carpeta /includes y son invocados a través de la función de php includes();. Además, mediante la función define(); definimos la constante que luego aparecerá en el <title> de cada una de las páginas. Por ejemplo, la pestaña de carrito.php dirá algo como "Mi Carrito - El Tejido de Anita", dado que así está definido en la función mencionada.



Includes:
En la carpeta /includes, como ya se dijo, van todos los elementos que se repiten. Esto hace que la página sea dinámica (y no estática). Por ejemplo, si queremos modificar el <footer>, ya no modificaríamos el archivo index.php y cada uno de los archivos que están a esa misma altura, sino que solamente modificamos el archivo /includes/footer.php. Cada archivo tiene una función que se detallará a continuación.

head.php -> aquí se encuentra todo lo que está arriba del <body> en un index.html común (los links al style/bootstrap, scripts, <title>, favicon, etc.). Además, si se quisiera modificar la etiqueta <header> o los íconos de las redes sociales, éste es el lugar.
footer.php -> en este lugar encontramos el <footer> y los links de js de bootstrap.
checkout.php -> esto es lo que se va a mostrar cada vez que queremos ver la versión resumidad de aquello que tenemos en el carrito. En teoría, esto nos debería devolver información mínima, esto es, una img del producto, el título del artículo y el precio. Además, esta página debería linkear a ../carrito.php, con el fin de que el usuario tenga la posibilidad de ver en detalle aquello que va a comprar.
menu.php -> aquí están los distintos menús (versión mobile y versión desktop), de querer modificar el html de los mismos, éste es el archivo a retocar.
nav.php -> acá encontramos los diversos <li> que queremos que el <nav> nos muestre. De querer agregar otro link en el <nav>, éste es el lugar. Sólo están los nombres y los href, la función que los muestra se encuentra en los próximos dos archivos.
nav-mob y nav-desk -> en el primero tenemos la función que nos va a mostrar el <li> con el link y la función para cerrar el menú mobile (closeNav();), en el segundo tenemos lo mismo menos la función closeNav();, dado que no hay menú mobile en la versión desktop.