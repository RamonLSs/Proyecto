@extends('layouts.app')

@section('content')
<style>
.contenedor_imagen_texto{
    float:left;
    margin:0px 0px 15px 15px;
}

.nombre{
text-align: center;
color:white;
background-color:black;
border-top-left-radius: 10px;
border-top-right-radius: 10px;
}

.parallax {
  background-color:#292929;
  min-height: 355px;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}

</style>

<div class="parallax"></div>
<div id="container">
    <div id="buscador" class="row ">
        <form name="search" method="GET" action="{{route('personaje.indeex')}}"class="form-inline mt-5 ml-5 mb-5">
        <div class="col">
            <select name="rareza" class='form-control mr-2 bg-dark text-white' onchange="this.form.submit()">
            <option value="%">Rareza</option>
                @foreach ($rarezas as $rareza)
                    @if ($rareza==$request->rareza)
            <option selected>{{$rareza}}</option>
                     @else
            <option>{{$rareza}}</option>
                    @endif
                @endforeach
        </select>
    </div>
        <div class="col">
             <select name="color" class='form-control mr-2 bg-dark text-white' onchange="this.form.submit()">
            <option value="%">Color</option>
                @foreach ($colores as $color)
                    @if ($color==$request->color)
            <option selected>{{$color}}</option>
                     @else
            <option>{{$color}}</option>
                    @endif
                @endforeach
        </select>
    </div>
        <div class="col">
            <select name="episodios" class='form-control ml-2 bg-dark text-white' onchange="this.form.submit()">
            <option value="%">Episodio</option>
                @foreach ($episodios as $episodio)
                    @if ($request->episodios == $episodio->id)
        <option value="{{ $episodio->id }}" selected >{{$episodio->nombre}}</option>
                     @else
            <option value="{{ $episodio->id }}">{{$episodio->nombre}}</option>
                    @endif
                @endforeach
        </select></div>

        </form>
      </div>

      @foreach ($personajes as $personaje)
        <div id="contenedorprincipal" class="container ">
            <div class="contenedor_imagen_texto ">
                <div class="nombre">{{$personaje->nombre}}</div>
                    <div class="imagen">
                        <a href="{{route('personajes.show',$personaje)}}"><img src="{{asset($personaje->imagen)}}"></a>
                      </div>
            </div>
        </div>

    @endforeach

























    </div>

