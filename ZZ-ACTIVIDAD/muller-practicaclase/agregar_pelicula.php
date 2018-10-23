<?php

include ('agregar_pelicula_valid.php');

include ('registro_valid.php');
include ('cartelera.php');

$urlicon="images/logo.png";
$h1title="<h1 class=\"centrar\">Películas del mundo​</h1>";
$h2title="<h2>Películas Disponibles​</h2>";
?>

<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
  <style>
    .error{
      color:red;
      font-size: 10px;
    }
  </style>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/registro.css">
  <title>Agregar película</title>
</head>

<body>

  <?php
  $star = '<img class="ranking" src="images/star.png" alt="">';
  $kstar = '<img class="ranking" src="images/starblack.png" alt="">';
  $imgMeGusta = '<img class="ranking" src="images/thumb-up-icon.png" alt="no-gusta">';
  $imgNoMeGusta = '<img class="ranking" src="images/thumb-down-icon.png" alt="no-gusta">';
  ?>

  <div class="contenedor-principal">

    <?php
    include('header.php');
    ?>

    <h1 class="centrar">Agregar una película</h1>

        <form class="" action="agregar_pelicula.php" method="post" enctype="multipart/form-data" >

          <label for="">
            Nombre de Película:<br>
            <input type="text" name="titleName" value="" placeholder="Escribe aquí"><br>
            <span class="error"><?php echo $errorTitle; ?></span>
          </label>

          <br><br>

          <label for="">
            Subí el poster:<br>
            <input type="file" name="moviePoster">
            <span class="error"><?php echo $errorFile; ?></span>
          </label>

          <br><br>

          <label for="">
            Fecha de estreno:<br>
            <input type="date" name="movieDate" value="" placeholder="Escribe aquí"><br>
            <span class="error"><?php echo $errorDate; ?></span>
          </label>

          <br><br>

          <label for="">
            Género:<br>
            <select name="genMovie">
              <option value="">Seleccione un género</option>
              <option value="cf">Ciencia Ficción<br>
              <option value="acc">Acción<br>
              <option value="ani">Animé<br>
              <option value="bel">Bélico<br>
              <option value="dra">Drama<br>
            </select>
            <span class="error"><?php echo $errorGen; ?></span>
          </label>

          <br><br>

          <label for="">
            Duración:<br>
            <input type="text" name="durMovie" value="" placeholder="Escribe aquí"><br>
            <span class="error"><?php echo $errorDur; ?></span>
          </label>

          <br><br>

          <label for="">
            Rating:<br>
            <input type="text" name="rateMovie" value="" placeholder="Escribe aquí"><br>
            <span class="error"><?php echo $errorRate; ?></span>
          </label>

          <br><br>

          <label for="">
            Awards:<br>
            <input type="radio" name="awardsMovie" value="1"><?php echo str_repeat($kstar, 1) ?><br>
            <input type="radio" name="awardsMovie" value="2"><?php echo str_repeat($kstar, 2) ?><br>
            <input type="radio" name="awardsMovie" value="3"><?php echo str_repeat($kstar, 3) ?><br>
            <input type="radio" name="awardsMovie" value="4"><?php echo str_repeat($kstar, 4) ?><br>
            <input type="radio" name="awardsMovie" value="5"><?php echo str_repeat($kstar, 5) ?><br>
            <span class="error"><?php echo $errorAwards; ?></span>
          </label>

          <br><br>

          <label for="">
            MeGusta:<br>
            <input type="radio" name="gustaMovie" value="true"><?php echo $imgMeGusta ?><br>
            <input type="radio" name="gustaMovie" value="false"><?php echo $imgNoMeGusta ?><br>
            <span class="error"><?php echo $errorMegusta; ?></span>
          </label>

          <br><br>

          <label for="">
            es3D:<br>
            <input type="radio" name="3dMovie" value="true">SI<br>
            <input type="radio" name="3dMovie" value="false">NO<br><br>
            <span class="error"><?php echo $error3D; ?></span>
          </label>

          <br><br>

          <label for="">
            Taquilla:<br>
            <input type="radio" name="taqMovie" value="true">SI<br>
            <input type="radio" name="taqMovie" value="false">NO<br><br>
            <span class="error"><?php echo $errorTaq; ?></span>
          </label>

          <br><br>

          <button type="submit">Enviar</button>

        </form>

      </div>

  </body>

</html>
