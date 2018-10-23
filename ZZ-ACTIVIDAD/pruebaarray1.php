<?php

  //Generos

  $generos=['Acción','Comedia','Terror','Suspenso','Drama'];


  //-----Indice de búsqueda
  foreach ($generos as $filtro) {
    echo '<li><a href="listarPelis.html">'.$filtro.'</a></li>';
  }

  $genero = [ ['Accion' => 'Acción', 'url' => 'Acción.php'] ,
              ['Comedia' => 'Comedia', 'url' => 'Comedia.php'] ,
              ['Terror' => 'Terror', 'url' => 'Terror.php'] ,
              ['Suspenso' => 'Suspenso', 'url' => 'Suspenso.php'] ,
              ['Drama' => 'Drama', 'url' => 'Drama.php'] ,
            ] ;























//-------FIN
  //Duración

  $duracion=[];

  $duracion[110]=120;
  $duracion[120]=110;
  $duracion[140]=140;

  echo $duracion[120].' min<br>';


  //Estrellas

  $estrellas=[];

  $estrellas[0]= 0;
  $estrellas[1]= 1;
  $estrellas[2]= 2;
  $estrellas[3]= 3;
  $estrellas[4]= 4;
  $estrellas[5]= 5;

  echo $estrellas[3].' estrellas<br>';


  //MeGusta

  $megusta=[];

  $megusta[0]=false;
  $megusta[1]=true;

  echo $megusta[0].'<br>';


  //Películas

  //$peliculas=[];

  //$peliculas['Avatar']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Avengers']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Moana']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Rogue One']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Titanic']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Drangon Ball Z']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];
  //$peliculas['Emoji']= [$genero=>1,$duracion=>1,$estrellas=>1,$megusta=>1];

  //echo $peliculas[3].'<br>';


?>
