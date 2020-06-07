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
    <form action="{{route('estadisticas.store')}}" name="g" method="POST">
        @csrf
    <h1 class="text-muted text-center text-white mt-2">Creacion de Estadisticas</h1>
    <p class="lead text-center text-white">Utiliza este formulario para crear las estadisticas del personaje seleccionado</p>
    <div class="form-row">
        <div class="col">
            <input type="hidden" name="personaje_id" value="{{$id}}">
            <input type="number" class="form-control mb-3" placeholder="Nivel de Poder" name="niveldepoder">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Salud" name="salud">
        </div>
    </div>

    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control mb-3" placeholder="Ataque Físico" name="ataquefisico">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Ataque de Ki" name="ataquedeki">
            </div>
        </div>


    <div class="form-row">
        <div class="col">
            <input type="number" class="form-control mb-3" placeholder="Defensa Física" name="defensafisica">
        </div>
        <div class="col">
            <input type="number" class="form-control" placeholder="Defensa de Ki" name="defensadeki">
            </div>
        </div>

        <div class="form-row">
            <div class="col">
                <input type="number" class="form-control mb-3" placeholder="Crítico" name="critico">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Velocidad de Recuperación de Ki" name="velocidadderecuperaciondeki">
                </div>
            </div>

            <div class="form-group ">
                <div class="col d-flex justify-content-center">
                    <input type="number" class="form-control"  name="ranurasdeequipamiento" placeholder="Ranuras de Equipamiento" style="width: 30%;" >
                </div>
                </div>

        <div class="form-row mt-3">
            <div class="col text-center">
                <input type="submit" value="Crear Estadisticas" class="btn btn-success mr-3">
                <a href="{{route('personajes.index')}}"class="btn btn-info">Volver a la Wiki</a>
            </div>
        </div>
    </form>
</div>
@endsection
