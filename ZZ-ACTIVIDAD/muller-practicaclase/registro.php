<?php
include('registro_valid.php');
include('cartelera.php');

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
  <title>Formularios</title>
</head>

<body>

  <div class="contenedor-principal">

    <?php
     include('header.php');
     ?>

    <h1 class="centrar">Registrate en Digital Movies</h1>

    <form action="registro.php" method="post" enctype="multipart/form-data">

        <label class="etiqueta" for="nombreDelUsuario">Nombre:</label>

        <input type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" name="userName"><span> *</span>
        <span class="error"><?php echo $errorName ?></span>

        <br><br>

        <label class="etiqueta" for="nombreDelUsuario">Edad:</label>
          <input  id="nombreDelUsuario" type="number" name="userAge" min="18">

        <br><br>

        <label class="etiqueta">Teléfono de contacto:</label>
        <input type="tel" placeholder="011-111-1111" name="userPhone">

        <br><br>

        <label class="etiqueta">Email:</label>

        <input type="text" name="userMail"><span> *</span>
        <span class="error"><?php echo $errorEmail ?></span>

        <br><br>

        <label class="etiqueta" for="">Sitio web:</label>
        <input type="text" name="userSite"><span> *</span>
        <span class="error"><?php echo $errorSite ?></span>

        <br><br>

        <label class="etiqueta" for="">Contraseña</label>

        <input type="password" name="userPass" maxlength="8"><span> *</span>

        <br><br>

        <label class="etiqueta" for="avatar">Subi tu Avatar:</label>
        <input type="file" id="avatar" name="userPhoto">
        <span class="error"><?php echo $errorFile ?></span>

        <br><br>

        <label class="etiqueta">Género</label>
          <label><input type="radio" name="userGender" value="m">Masculino</label>
          <label><input type="radio" name="userGender" value="f">Femenino</label>

        <br><br>

        <label class="etiqueta">Estado Civil:</label>
          <label><input type="radio" name="userCivilStatus" value="soltero">Soltero</label>
          <label><input type="radio" name="userCivilStatus" value="casado">Casado</label>
          <label><input type="radio" name="userCivilStatus" value="viudo">Viudo</label>

        <br><br>

        <label class="etiqueta" for="">Pasatiempos</label>
          <label><input type="checkbox" name="userHobbies[]" value="pasear">Pasear</label>
          <label><input type="checkbox" name="userHobbies[]" value="tennis">Jugar al Tennis</label>
          <label><input type="checkbox" name="userHobbies[]" value="mate">Tomar mate</label>


        <br><br>

        <label class="etiqueta">Comentarios:</label>
        <textarea name="userComments" placeholder="Estoy comentando"></textarea>

        <br><br>

        <label class="etiqueta">Pais de Origen</label>
        <select name="userCountry">
          <option value="" disabled>Seleccione un Pais</option>
          <option value="arg">Argentina</option>
          <option value="bra">Brasil</option>
          <option value="bol">Bolivia</option>
          <option value="col">Colombia</option>
          <option value="ch">Chile</option>
          <option value="pe">Peru</option>
        </select>

        <br><br>
        <div class="centrar">
          <button type="reset">Borrar</button>
          <button type="submit" name="submit">Registrate</button>
        </div>

    </form>


  </div>
</body>
</html>
