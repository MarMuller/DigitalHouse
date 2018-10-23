<?php

$errorFile='';
$errorName = '';
$errorEmail='';
$errorSite='';


if( $_POST ) {

  /*----FOTO----*/
  //var_dump($_FILES);

  if( $_FILES['userPhoto']['error'] === 0 ) {
    $ext = pathinfo($_FILES['userPhoto']['name'], PATHINFO_EXTENSION);
    if( $ext == 'jpg' ||  $ext == 'png' ) {
      $fileLoc = "uploads/{$_POST['userName']}.{$ext}" ;
      move_uploaded_file($_FILES['userPhoto']['tmp_name'], $fileLoc);
    } else{
      $errorFile = 'El Formato es inválido';
    }
  }
  else {
    $fileLoc = 'n/a';
  }

  /*----NOMBRE USUARIO----*/
  if( empty($_POST['userName']) ){
    $errorName = 'Debe ingresar un nombre.';
  } else if( strlen( $_POST['userName'] ) < 2 ) {
    $errorName = 'Debe tener al menos 2 letras.';
  }

  /*----EMAIL----*/
  if( empty($_POST['userMail']) ){
    $errorEmail = 'Debe ingresar un email.';
  } else if (filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL ) === false) {
    $errorEmail = 'El email no es válido.';
  }

  /*----SITIOWEB----*/
  if( empty($_POST['userSite']) ){
    $errorSite = 'Debe ingresar un sitio web.';
  }else if (filter_var( $_POST['userSite'] , FILTER_VALIDATE_URL ) === false) {
    $errorSite = 'El sitio web es inválido';
  } else {

    include('registro_radio_checkbox.php');

    $userName = $_POST["userName"];
    $userAge = $_POST["userAge"];
    $userPhone = $_POST["userPhone"];
    $userMail = $_POST["userMail"];
    $userSite = $_POST["userSite"];
    $userPass = $_POST["userPass"];
    $userGender = $gender;
    $userCivilStatus = $civsta;
    $userHobbies = $allhobbies;
    $userComments = $_POST["userComments"];
    $userCountry = $_POST["userCountry"];

    $writeUserName = 'Nombre: '.$userName;
    $writeUserAge = 'Edad: '.$userAge;
    $writeUserPhone = 'Teléfono: '.$userPhone;
    $writeUserMail = 'Email: '.$userMail;
    $writeUserSite = 'Sitio: '.$userSite;
    $writeUserPass = 'Password: '.$userPass;
    $userFile = 'Foto: '.$fileLoc;
    $writeUserGender = 'Genero: '.$userGender;
    $writeUserCivilStatus = 'Estado civil: '.$userCivilStatus;
    $writeUserHobbies = 'Hobbies: '.$userHobbies;
    $writeUserComments = 'Comentario: '.$userComments;
    $writeUserCountry = 'País: '.$userCountry;

    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserName.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserAge.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserPhone.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserMail.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserSite.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserPass.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $userFile.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserGender.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserCivilStatus.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserHobbies.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, $writeUserComments.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);
    file_put_contents('00hola.txt'/*donde se guarda*/, '-----------------'.PHP_EOL /*lo que quiero escribir*/, FILE_APPEND | LOCK_EX);

  }

}

?>
