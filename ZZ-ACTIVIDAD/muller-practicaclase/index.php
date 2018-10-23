<!DOCTYPE html>

<?php

include('cartelera.php');

$webtitle="DigitalHouse - Películas";
$urlicon="images/logo.png";
$h1title="<h1 class=\"centrar\">Películas del mundo​</h1>";
$h2title="<h2>Películas Disponibles​</h2>";

?>

<html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title><?php echo $webtitle; ?></title>
   <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
 </head>

 <body>

 <div class="contenedor-principal">

   <?php
    include('header.php');
    ?>

   <?php echo $h2title; ?>

   <?php
   //ENLACE GET
   //foreach ($cartelera as $key => $value) {
   //  echo '<a href="mostrarPelicula.php?titulo='.$value['title'].'">Ver Título</a>';
   //  echo ' / ';
   //}
   //echo '<br>';
   ?>

   <div class="contenedor-pelis">

     <?php
     foreach ($cartelera as $pelicula) {
       include ('item_pelicula.php');
     }
     ?>

   </div>

   <?php
    $logueado = false;
    $nombre = "Marina";
    ?>

    <?php
    include('footer.php');
    ?>

  </body>

</html>
