<?php

include('cartelera.php');

$urlicon="images/logo.png";
$h1title="<h1 class=\"centrar\">Películas del mundo​</h1>";
$h2title="<h2>Películas Disponibles​</h2>";

?>

<html lang="en" dir="ltr">

 <head>
   <meta charset="utf-8">
   <title>Resultado de búqueda</title>
   <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
   <link rel="stylesheet" href="css/styles.css">
 </head>

 <body>

   <div class="contenedor-principal">

    <?php
    include('header.php');
    ?>

    <?php //var_dump($_GET); ?>

    <br>

    <?php
    include('cartelera.php');
    $buscador = $_GET['buscador'];
    echo $buscador.'<br>';

    echo '<br><br>------------------<br><br>';
    ?>

    <h2>Resultado de búsqueda:</h2>

    <div class="contenedor-pelis">

      <?php

      $coincid = 0;

      foreach ($cartelera as $pelicula) {
        if ($buscador == $pelicula['title']) {
          include ('item_pelicula.php');
          $coincid = $coincid+1;
        }
      }

      echo '<spam style="clear:left;"><br></spam>';

      if ($coincid >=1) {
        echo '<br>Hay '.$coincid.' resultado(s).<br>';
      } else {
        echo 'No se encontraron resultados.<br>';
      }

      ?>

    </div>

  </div>

</body>

</html>
