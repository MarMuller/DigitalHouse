<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/Actors/search','ActorsController@search');
Route::get('/Actors/{id}','ActorsController@show');
Route::get('/Actors','ActorsController@index');
//Route::get('/peliculas/buscar/{nombre}', 'PeliculasController@buscarPeliculaNombre');
//Route::get('/peliculas/{id}', 'PeliculasController@buscarPeliculaId');



// function chau($chau) {
//
//   $datosPeli = [
//    ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
//    ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
//    ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
//    ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
//    ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
//    ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
//    ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
//    ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
//    ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
//    ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
//    ];
//
//   $verificar=false;
//
//   foreach ($datosPeli as $datos) {
//     if($datos == $chau) {
//       echo $datos['title'];
//       echo $datos['genre'];
//       $verificar=true;
//     }
//     }
//     if($verificar==false) {
//       echo "no se encontró la película";
//     }
//
// }
//
// Route::get('/peliculas/{datosPeli}', function ($chau) {
//     chau($chau);
// });
//
//
// function hola() {
//   $peliculas = [
//    ['title' => 'Avatar', 'poster' => 'images/avatar.jpg' , 'genre' => 'Ciencia Ficción'],
//    ['title' => 'Infinity War', 'poster' => 'images/avengers.jpg' , 'genre' => 'Acción'],
//    ['title' => 'DeadPool', 'poster' => 'images/deadpool1.jpg' , 'genre' => 'Acción'],
//    ['title' => 'Dragon Ball', 'poster' => 'images/dragonball.jpg' , 'genre' => 'Animé'],
//    ['title' => 'Dunkerque', 'poster' => 'images/dunkirk.jpg' , 'genre' => 'Belico'],
//    ['title' => 'Emoji', 'poster' => 'images/emoji.jpg' , 'genre' => 'Animada'],
//    ['title' => 'Inception', 'poster' => 'images/inception1.jpg' , 'genre' => 'Drama'],
//    ['title' => 'Moana', 'poster' => 'images/moana.jpg' , 'genre' => 'Animada'],
//    ['title' => 'Rogue One', 'poster' => 'images/rogueone.jpg' , 'genre' => 'Acción'],
//    ['title' => 'Titanic','poster' => 'images/titanic.jpg' , 'genre' => 'Drama'],
//    ];
//
//    foreach ($peliculas as $peli) {
//    echo '<li>'.$peli['title'].' - '.$peli['genre'];
//    echo '<br> <img src='.$peli['poster'].'> </li>';
//    };
// }
//
// Route::get('/peliculas', function () {
//     echo '<h1>Listado de Pelis</h1>';
//     echo'<ul>';
//     hola();
//     echo '</ul>';
//
// });
//
//
// Route::get('/miRuta', function () {
//     return '<h1>"Mi primer ruta en Laravel"</h1>';
//  });
//
// Route::get('/', function () {
//     return view('welcome');
//});
