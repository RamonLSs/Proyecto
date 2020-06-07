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
    <form action="{{route('episodios.store')}}" name="g" method="POST">
        @csrf
    <h1 class="text-muted text-center text-white mt-2">Selección de Episodio</h1>
    <p class="lead text-center text-white">Utiliza esta lista para seleccionar el episodio del personaje seleccionado</p>
    <input type="hidden" name="personaje_id" value="{{$id}}">
    <div class="col">
        <label for="nombre" class="col-form-label">Nombre del Episodio</label>
        <select name="episodio" class="form-control" data-style="btn-primary">
            @foreach ($episodios as $episodio)
                <option  id="{{$episodio->id}}" value="{{$episodio->id}}">{{$episodio->nombre}}</option>
            @endforeach


                <input type="submit" value="Seleccionar Episodio" class="btn btn-success mt-3 float-right">
                <a href="{{route('personajes.index')}}"class="btn btn-info mt-3 mr-3 float-right">Volver a la Wiki</a>
        </select>
    </div>
    </form>
</div>
@endsection
