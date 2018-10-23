<?php

class Movie {
  private $titulo;
  private $rating;
  private $date_release;

  public function __construct( $elTitulo, $elRating, $elEstreno ) {
    $this->titulo = $elTitulo;
    $this->rating = $elRating;
    $this->date_release = $elEstreno;
  }

  public function changeTitle($elTitulo) {
    $this->titulo = $elTitulo;
  }

  public function writeTitle() {
    echo 'AHORA El título de la peli es: '.$this->titulo.'.<br><br>';
  }

}

?>
