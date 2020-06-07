@extends('layouts.app')

@section('content')
        <div class="card mx-auto mt-5" style="width: 22rem; font-family:Times, Times New Roman, serif">
            <img src="{{asset(auth()->user()->imagen)}}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">Usuario #{{auth()->user()->id}}</h5>
            <p class="card-text">Nombre: {{auth()->user()->name}}</p>
            <p class="card-text">Correo electronico: {{auth()->user()->email}}</p>
              <a href="{{route('personaje.indeex')}}" class="btn btn-primary">Ir a Personajes</a>
            <a href="{{route('usuario.cambiar')}}" class="btn btn-danger">Cambiar Contraseña</a>
            </div>
          </div>
    @endsection
