<?php

$errorTitle = '';
$errorFile = '';
$errorDate= '';
$errorGen = '';
$errorDur='';
$errorRate='';
$errorAwards='';
$errorMegusta='';
$error3D='';
$errorTaq ='';


if ($_POST) {

  var_dump($_POST);
  //echo $_POST['moviePoster'];

  /*POSTER*/
  if ( $_FILES['moviePoster']['error'] === UPLOAD_ERR_OK ) {
    $ext = pathinfo($_FILES['moviePoster']['name'], PATHINFO_EXTENSION);
    if( $ext == 'jpg' ||  $ext == 'png' ) {
      $fileLoc = "images/uploads/{$_POST['titleName']}.{$ext}" ;
      move_uploaded_file($_FILES['moviePoster']['tmp_name'], $fileLoc);
    } else{
      $errorFile = 'El Formato es inválido.';
    }
  } else {
    $errorFile = 'Debe ingresar un poster.';
  }

  /*TITULO*/
  $_POST['titleName'] = trim($_POST['titleName']);

  if ( empty($_POST['titleName'])) {
    $errorTitle = 'Debe ingresar el título.';
  } else if (strlen( $_POST['titleName'] ) < 2 ) {
    $errorTitle = 'Debe ingresar un nombre válido.';
  }

  /*ESTRENO*/
  else if (empty($_POST['movieDate'])) {
   $errorDate = 'Debe ingresar la fecha de lanzamiento.';
 }

  /*GENERO*/
  else if (empty($_POST['genMovie'])) {
   $errorGen = 'Debe ingresar la género.';
  }

  /*DURACION*/
  else if (empty($_POST['durMovie'])) {
   $errorDur = 'Debe ingresar la duración.';
  }

  /*RATING*/
  else if (empty($_POST['rateMovie'])) {
   $errorRate = 'Debe ingresar un puntación.';
  }

  /*AWARDS*/
  else if (empty($_POST['awardsMovie'])) {
   $errorAwards = 'Debe ingresar cantidad de premios.';
  }

  /*ME-GUSTA*/
  else if ($_POST['gustaMovie'] == false) {
   $_POST['gustaMovie'] = false ;
  }

  /* 3D */
  else if ($_POST['3dMovie'] == false) {
   $_POST['3dMovie'] = false ;
  }

  /* TAQUILLA */
  else if ($_POST['taqMovie'] == false) {
   $_POST['taqMovie'] = false ;
  }

  else {

  include ('agregar_pelicula_genero.php');

  $movieTitle = $_POST['titleName'];
  $movieDate = date('Y-m-d', strtotime($_POST["movieDate"]));
  $movieRate = $_POST['rateMovie'];
  $movieDur = $_POST['durMovie'];
  $movieAwards = $_POST['awardsMovie'];
  $movieMegusta = $_POST['gustaMovie'];
  $movie3D = $_POST['3dMovie'];
  $moviePoster = $fileLoc;
  $movieGen = $_POST['genMovie'];
  $movieTaq = $_POST['taqMovie'];

  $newMovie = '$cartelera[]=["title" => "'.$movieTitle.'", "release_date" => "'.$movieDate.'", "rating" => '.$movieRate.', "length" => '.$movieDur.', "awards" => '.$movieAwards.', "meGusta" => '.$movieMegusta.', "es3D" => '.$movie3D.', "poster" => "'.$moviePoster.'" , "genre" => "'.$movieGen.'", "taquilla" => '.$movieTaq.' ];';
  file_put_contents('cartelera.php'/*donde se guarda*/, $newMovie.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
  }

}


?>
