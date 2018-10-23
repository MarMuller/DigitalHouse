<?php

/*Colocar un enlace <a> con atributo href=”mostrarPelicula.php”, donde se envíe por get el
nombre de la película.*/

include('movies.php');



$cartelera = $_GET['titulo'];

echo $cartelera;

?>
