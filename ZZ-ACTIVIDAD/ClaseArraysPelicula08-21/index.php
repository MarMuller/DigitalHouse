<!DOCTYPE html>
<?php

  //$generos = [ 'Acción', 'Comedia', 'Terror', 'Suspenso', 'Drama', 'Aventura', 'Triller' ];

  $generos = [
      [ 'nombre' => 'Comedia', 'url' => 'comedia.php' ],
      [ 'nombre' => 'Acción', 'url' => 'accion.php' ]
  ];

  //$peliculas = [ 'Avatar', 'Rogue One', 'Dragon Ball', 'otra', 'mas' ];

  $peliculas = [
    ['title' => 'Avatar', 'release_date' => '2009-12-18', 'rating' => '10', 'length' => 162, 'awards' => 2, 'meGusta' => true, 'es3D' => true, 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
    ['title' => 'Infinity War', 'release_date' => '2018-04-23', 'rating' => '10', 'length' => 148, 'awards' => 3, 'meGusta' => true, 'es3D' => true, 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
    ['title' => 'DeadPool', 'release_date' => '2016-02-15', 'rating' => '10', 'length' => 109, 'awards' => 1, 'meGusta' => true, 'es3D' => false, 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
    ['title' => 'Dragon Ball', 'release_date' => '2014-03-30', 'rating' => '10', 'length' => 120, 'awards' => 1, 'meGusta' => true, 'es3D' => true, 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
    ['title' => 'Dunkerque', 'release_date' => '2017-07-21', 'rating' => '10', 'length' => 106, 'awards' => 2, 'meGusta' => true, 'es3D' => false, 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
    ['title' => 'Emoji', 'release_date' => '2017-07-28', 'rating' => '10', 'length' => 90, 'awards' => 0, 'meGusta' => false, 'es3D' => false, 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
    ['title' => 'Inception', 'release_date' => '2010-07-16', 'rating' => '3', 'length' => 148, 'awards' => 3, 'meGusta' => true, 'es3D' => false, 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
    ['title' => 'Moana', 'release_date' => '2016-11-23', 'rating' => '10', 'length' => 107, 'awards' => 0, 'meGusta' => false, 'es3D' => false, 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
    ['title' => 'Rogue One', 'release_date' => '2016-12-15', 'rating' => '10', 'length' => 133, 'awards' => 1, 'meGusta' => true, 'es3D' => true, 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
    ['title' => 'Titanic', 'release_date' => '1997-12-19', 'rating' => '10', 'length' => 195, 'awards' => 4, 'meGusta' => true, 'es3D' => false, 'poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
    ['title' => 'Tomb Raider', 'release_date' => '2001-10-23', 'rating' => '10', 'length' => 100, 'awards' => 0, 'meGusta' => true, 'es3D' => true, 'poster' => 'images/tomb-raider1.jpg' , 'genre' => 'Acción'],
    ['title' => 'Vengadores', 'release_date' => '2012-05-04', 'rating' => '4', 'length' => 144, 'awards' => 2, 'meGusta' => true, 'es3D' => false, 'poster' => 'images/vengadores1.jpg' , 'genre' => 'Acción'],
   ];


  $title = 'Digital Movies - Tus películas favoritas';
  $titulo = 'Peliculas del Argentina';
  $logo = 'images/logo.png';
  $edad =23;

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link href="https://fonts.googleapis.com/css?family=Modern+Antiqua" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style media="screen">
    .menorDeEdad{
      opacity:0.2;
    }


    <?php if($edad<18){ ?>
      .contenedor-principal{
        background-color: black;
      }
    <?php } ?>

    </style>
  </head>
  <body class="<?php echo $edad<18? "menorDeEdad" : ""; ?>">

  <div class="contenedor-principal">

    <?php
      include('header.php');
      ?>


      <h2>Peliculas Disponibles</h2>

    <div class="contenedor-pelis">

      <?php
      foreach ($peliculas as $pelicula) { ?>

        <div class="items">
          <?php
            $duracion = $pelicula['length'];
            $stars = '<img class="ranking" src="images/star.png" alt="">';
            $meGusta = $pelicula['meGusta'];
            //fecha de estreno en formato Unix.
            $fechaDeEstreno = strtotime($pelicula['release_date']); //lo convierto a un numero para poder restarlos.
            $fechaActual = strtotime(date('Y-m-d'));
            $mesesDiferencia = ($fechaActual-$fechaDeEstreno)/(60*60*24*30); //resto y obteno los meses de diferencia.
          ?>
          <img class="poster" src="<?= $pelicula['poster'] ?>" alt="">
          <div class="detalle">
            <label><?php echo $pelicula['title']. ' ( '.date('Y', strtotime($pelicula['release_date'])).' ) ' ; ?></label>
            <label><?php echo $pelicula['genre']; ?></label>
            <label>Duración: <?php echo number_format($duracion/60, 2) ?> hrs</label>
            <label>Rating: <?php echo $pelicula['rating'] ?></label>
            <label> <?php echo str_repeat($stars, $pelicula['awards']) ?>
              <img class="ranking" src="images/starblack.png" alt=""> </label>
              <label>
              <?php if($meGusta) {
                echo '<img class="ranking" src="images/thumb-up-icon.png" alt="">';
              }else{
                echo '<img class="ranking" src="images/thumb-down-icon.png" alt="">';
              }
              ?>
            </label>
            <?php if($mesesDiferencia<=20){
              echo '<img class="estreno" src="images/estreno3.png" alt="">';
            } ?>
              <img class="taquillera" src="images/ticket.png" alt="">
            <?php if ($pelicula['es3D']) { ?>
              <img class="tresd" src="images/anteojos-3d.png" alt="">
            <?php } ?>
          </div>
        </div>

      <?php } ?>


    </div>


    <?php
    $logueado = false;
    $nombre = "JC";
     ?>

     <?php
      include('footer.php');
        ?>

  </div>
  </body>
</html>
