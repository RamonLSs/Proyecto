@extends('layouts.app')

@section('content')
<style>
    .parallax {
  background-image: url('../dblegend.jpg');
  background-color:#292929;
  min-height: 355px;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $miError)
                <li>{{$miError}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="parallax"></div>
<div class="container">
    <h1 class="text-muted text-center text-white mt-2">Creación del personaje</h1>
    <p class="lead text-center text-white ">Utiliza este formulario para crear un personaje del videojuego Dragon Ball Legends</p>
<form action="{{route('personajes.store')}}" name="c" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Nombre" name="nombre">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Rareza" name="rareza">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Color" name="color">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Tipo" name="tipo">
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col">
            <b class="text-white">Imagen</b>&nbsp;<input type="file" name="imagen" accept="image/*">
        </div>
    </div>

    <div class="form-row mt-3">
        <div class="col text-center">
            <input type="submit" value="Crear Personaje" class="btn btn-success mr-3">

            <a href="{{route('personaje.indeex')}}" class="btn btn-info">Volver a la Wiki</a>
        </div>
    </div>
</form>
</div>
@endsection
