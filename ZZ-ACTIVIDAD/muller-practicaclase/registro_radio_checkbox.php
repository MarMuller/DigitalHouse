<?php
/*----GENERO----*/

if (isset($_POST['userGender']) === false) { //Si no exite variable...
  $gender = 'n/a';
} else if ($_POST['userGender'] == 'm') {
  $gender = 'masculino';
} else if ($_POST['userGender'] == 'f') {
  $gender = 'femenino';
}

/*----ESTADO CIVIL----*/

if (isset($_POST['userCivilStatus']) === false) { //Si no exite variable...
  $civsta = 'n/a';
} else if ($_POST['userCivilStatus'] == 'soltero') {
  $civsta = 'soltero';
} else if ($_POST['userCivilStatus'] == 'casado') {
  $civsta = 'casado';
} else if ($_POST['userCivilStatus'] == 'viudo') {
  $civsta = 'viudo';
}

/*----HOBBIES----*/

//Si exiten los valores...

if (isset($_POST['userHobbies']) === true) {
  $hobb = $_POST['userHobbies'];
}

if (isset($_POST['userHobbies'][0]) === true) {
  $pasear = $_POST['userHobbies'][0];
  $act['pasear'] = $pasear;
}

if (isset($_POST['userHobbies'][1]) === true) {
  $tennis = $_POST['userHobbies'][1];
  $act['tennis'] = $tennis;
}

if (isset($_POST['userHobbies'][2]) === true) {
  $mate = $_POST['userHobbies'][2];
  $act['mate'] = $mate;
}


//Respuesta Hobbies en String...

if (isset($hobb) === true) {
  $hobbies = [];
  if (isset($pasear) === false) {
    if (isset($tennis) === false) {
      if (isset($mate) === true) {
        $hobbies[] = $act['mate'];
      }
    } else {
      $hobbies[] = $act['tennis'];
      if (isset($mate) === true) {
        $hobbies[] = $act['mate'];
      }
    }
  } else {
    $hobbies[] = $act['pasear'];
    if (isset($tennis) === true) {
      $hobbies[] = $act['tennis'];
      if (isset($mate) === true) {
        $hobbies[] = $act['mate'];
      }
    } else {
      if (isset($mate) === true) {
        $hobbies[] = $act['mate'];
      }
    }
  }
} else {
  $hobbies = [];
  $hobbies[] = 'n/a';
}

$allhobbies = implode(" / ",$hobbies);

?>
