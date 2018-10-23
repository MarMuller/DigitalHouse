<!DOCTYPE html>
<?php

$errorNombre = '';
$errorDni='';
$errorCorreo='';
$errorFoto='';

//es aqui donde verificamos que se enviaron los datos
if( $_POST ){
  //aqui empiezo las validaciones
  var_dump($_FILES);

  if( $_FILES['foto']['error'] === 0 ){
    //echo 'voy a mover el archivo';
    $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    if( $ext == 'jpg' ||  $ext == 'png' ){
      move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$_POST['dni'].'.'.$ext);
    }else{
      $errorFoto = 'El Formato es inválido';
    }
  }

  $_POST['nombre']=trim( $_POST['nombre'] );
  $_POST['dni']=trim( $_POST['dni'] );
  $_POST['correo']=trim( $_POST['correo'] );

  if( empty($_POST['nombre']) ){
    $errorNombre = 'Debe ingresar el nombre';
  }else if( strlen( $_POST['nombre'] )<2 ){
    $errorNombre = 'El Nombre debe tener al menos 2 letras';
  }

  if( empty($_POST['dni']) ){
    $errorDni = 'Debe ingresar el DNI';
  }else if( is_numeric($_POST['dni'])===false ){
    $errorDni = 'El DNI es inválido';
  }

  if( empty($_POST['correo']) ){
    $errorCorreo = 'Debe ingresar el Correo';
  }else if (filter_var( $_POST['correo'] , FILTER_VALIDATE_EMAIL )===false) {
    $errorCorreo = 'El Correo es inválido';
  }

  if( isset( $_POST['genero'] ) ===false){
    $errorGenero = 'Debe seleccionar un genero';
  }


}


 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Estudiantes de la clase</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <style>
      .error{
        color:red;
        font-size: 10px;
      }
    </style>
  </head>
  <body>

    <div class="container">


    <h1>Nuevo Estudiante</h1>

    <form class="" action="nuevoEstudiante.php" method="post" enctype="multipart/form-data">

      <label for="">
        Nombre:
        <input type="text" name="nombre" value="<?php echo $_POST['nombre']??'' ;?>" placeholder="Nombre del Estudiante">
        <span class="error">
          <?php echo $errorNombre; ?>
        </span>
      </label>

      <br>
      <label for="">
        DNI:
        <input type="text" name="dni" value="<?php echo $_POST['dni'];?>">
        <?php echo $errorDni; ?>
      </label>

      <br>
      <label for="">
        Email:
        <input type="email" name="correo" value="">
        <?php echo $errorCorreo; ?>
      </label>

      <br>
      <label for="">
        Genero:
        <input type="radio" name="genero" value="m">Masculino
        <input type="radio" name="genero" value="f">Femenino

        <?php echo $errorGenero; ?>

      </label>

      <br>
      <label for="">
        Foto:
        <input type="file" name="foto" value="">
        <?php echo $errorFoto; ?>
      </label>

      <br>
      <button type="submit" name="guardar" class="btn btn-success">Guardar</button>

    </form>


    </div>

  </body>
</html>
