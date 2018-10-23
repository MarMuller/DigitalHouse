<?php include ('usuario_logueado.php')?>

<ul id="navegador">
  <li><a href="index.php">Inicio</a></li>
  <li><a href="agregar_pelicula.php">Agregar pelicula</a></li>
  <li><a href="contacto.html">Contacto</a></li>
  <li><a href="galeria.html">Galeria</a></li>
  <?php
    if (!$logueado) {
      echo '<li><a href="registro.php">Registrate</a></li>';
      echo '<li><a href="login.html">Login</a></li>';
    }
    else {
      echo '<li><a href="perfil.html">Mi Perfil</a></li>';
    }
   ?>
</ul>

<p class="centrar" style="clear:both;">
  <a href="index.html">
    <img id="logo" src="<?php echo $urlicon; ?>" alt="logo Digital Movies">
  </a>
</p>

<?php echo $h1title; ?>

<div class="centrar center-inlineblock">
  <ul>
    <?php

    //$generos = [ 'Acción', 'Comedia', 'Terror', 'Suspenso', 'Drama', 'Aventura', 'Triller' ];

    $generos=[
      ['nombre' => 'Acción', 'url' => 'accion.php'],
      ['nombre' => 'Comedia', 'url' => 'comedia.php'],
      ['nombre' => 'Drama', 'url' => 'drama.php'],
      ['nombre' => 'Terror', 'url' => 'terror.php'],
      ['nombre' => 'Ciencia ficcíon', 'url' => 'cienciaficcion.php'],
      ['nombre' => 'Bélico', 'url' => 'belico.php'],
      ['nombre' => 'Animé', 'url' => 'anime.php'],
      ['nombre' => 'Animada', 'url' => 'animada.php'],
    ];

    //-----Indice de búsqueda por género
    foreach ($generos as $ungenero) {
      echo '<li><a href="'. $ungenero['url'] .'">'. $ungenero['nombre'] .'</a></li>';
    }

    ?>

  </ul>
</div>

<div class="centrar" id="buscador">
  <form action="search_results.php" method="get">
      <input type="text" name="buscador" placeholder="¿Qué desea ver?" style="padding:3px 0 0 0;">
      <button type="submit" value="Search" style="margin-top:5px;"><img src="images/search.png" width="15" alt="Buscar"></button>
  </form>
</div>
