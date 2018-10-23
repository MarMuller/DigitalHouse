<?php

if ($_POST['genMovie'] == 'cf') {
  $_POST['genMovie'] = 'Ciencia Ficción';
} else if ($_POST['genMovie'] == 'acc') {
  $_POST['genMovie'] = 'Acción';
} else if ($_POST['genMovie'] == 'ani') {
  $_POST['genMovie'] = 'Animé';
} else if ($_POST['genMovie'] == 'bel') {
  $_POST['genMovie'] = 'Bélico';
} else if ($_POST['genMovie'] == 'dra') {
  $_POST['genMovie'] = 'Drama';
}

?>
