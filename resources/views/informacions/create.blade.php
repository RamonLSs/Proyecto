@extends('layouts.app')

@section('content')
<style>
    .parallax {
  background-image: url('../../dblegend.jpg');
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
    <form action="{{route('informacions.store')}}" name="g" method="POST">
        @csrf
    <h1 class="text-muted text-center text-white mt-2">Creacion de Informacion</h1>
    <p class="lead text-center text-white">Utiliza este formulario para crear la informacion del personaje seleccionado</p>
    <div class="form-group">
        <input type="text" class="form-control text-center" placeholder="Habilidad Z" name="habilidadz">
    </div>

    <div class="form-row">
        <div class="col">
            <input type="hidden" name="personaje_id" value="{{$id}}">
            <input type="text" class="form-control mb-3" placeholder="Nombre de la Habilidad Principal" name="nombrehp">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Habilidad Principal" name="habilidadprincipal">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Nombre Habilidad Unica 1" name="nombrehu">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Habilidad Principal 1" name="habilidadunica">
            </div>
        </div>


    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control mb-3" placeholder="Nombre Habilidad Unica 2" name="nombrehuu">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Habilidad Principal 2" name="habilidadunicaa">
            </div>
        </div>

        <div class="form-row mt-3">
            <div class="col text-center">
                <input type="submit" value="Crear Informacion" class="btn btn-success mr-3">
                <a href="{{route('personajes.index')}}"class="btn btn-info">Volver a la Wiki</a>
            </div>
        </div>
    </form>
</div>
@endsection
