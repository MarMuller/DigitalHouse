<?php

include('cartelera.php');

//titulo = $_GET['title'];

echo 'Por get->'.$_GET['title'].'<br>';

foreach ($cartelera as $key => $value) {
  echo
  $value['title'].': '.$value['release_date'].' / '.$value['rating'].' / '.$value['length'].' / '.$value['awards'].' / '.$value['meGusta'].' / '.$value['es3D'].' / '.$value['poster'].' / '.$value['genre'];
  echo '<br>';
}

echo '<br><br>-----------------------------<br><br>';

foreach ($cartelera as $value) {
  if($_GET['titulo'] == $value['title']){
    echo $value['title'].'<br>';
    break;
  }
}


?>
