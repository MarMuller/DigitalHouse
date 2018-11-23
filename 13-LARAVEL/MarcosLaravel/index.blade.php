@extends('layouts.default')

@section('main')
<form action="/Actors/search" method="get" id="register" enctype="multipart/form-data">
  <input type="text" name="buscar">
  <button type="submit" class:"button">
    Buscar
  </button>
<form action="Actors/search?buscar=%" method="get" id="reset" enctype="multipart/form-data">
  <button type="submit" class:"button">
    Todos
  </button>
  <br>
  <br>

  @foreach ($actores as $actor)

  <a href="/Actors/{{$actor->id}}">{{ $actor->getFullName()}}<br></a>

  @endforeach
@endsection
