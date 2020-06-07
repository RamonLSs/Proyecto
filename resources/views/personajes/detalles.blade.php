@extends('layouts.app')

@section('content')

<style>
    #personaje{
        background: #FFFFFF;
        border:2px solid #0066cc;
        border-radius:7px;
        box-shadow: 0 0 4px #0066cc;
    }
    #informacion{
        background:#ffffff none repeat scroll 0% 0%;
        border: 2px solid #0066cc;
        border-radius:7px;
        box-shadow:0 0 4px #0066cc;
    }

     #foto{
        background:#ffffff none repeat scroll 0% 0%;
         border: 2px solid #0066cc;
         border-radius:7px;
         box-shadow:0 0 4px #0066cc;
    }
    #estadisticas{
        background:#ffffff none repeat scroll 0% 0%;
        border: 2px solid #0066cc;
        border-radius:7px;
        box-shadow:0 0 4px #0066cc;
    }

.info{
    border-style:outset;
    border-color:#ffffff;
    font-size:large;
    background:#51cdff;
}

.titulo{
    border-style:outset;
    border-color:#ffffff;
    background:#51cdff;
    width:30%;
}

.descripcion{
    border-style:outset;
    border-color:#ffffff;
    background:#51cdff;
    font-size:medium;
    color:black;
}
</style>
<div id="container">
    <div class="row ml-5 mt-5 mr-5  ">
    {{-- En este div se encuentra la informacion básica del personajes (Nombre, Rareza, Color y Tipo) --}}
    <div class="col-12">
        <table id="personaje" style="width: 100%; " class="float-center mr-2 mt-3" >
            <tbody>
                {{-- Aqui la imagen --}}
                <tr>
                    <td style="width:100px;" rowspan="3">
                        @can('direccion')
                        <form action="{{route('personajes.destroy', $personaje)}}" name="del" method="POST" class="form-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" onclick="return confirm('¿Borrar Personaje?')" class="btn btn-danger btn-sm float-right"  onclick="return confirm('¿Deseas borrar al personaje?');">X</button>
                        </form>
                        @endcan
                        <img src="{{asset($personaje->imagen)}}" width="120px">
                    </td>
                    {{-- Aqui el nombre del personaje seleccionado --}}
                    <td class="info" colspan="3">

                        <center>

                            <b>{{$personaje->nombre}}</b>

                        </center>
                    </td>
                </tr>
                {{-- Y Aqui la Rareza, Color y Tipo del personaje seleccionado --}}
                <tr>
                    <td style="font-size: small"><center><b>Rareza</b></center></td>
                    <td style="font-size: small"><center><b>Color</b></center></td>
                    <td style="font-size: small"><center><b>Tipo</b></center></td>
                </tr>

                <tr>
                    <td><center>{{$personaje->rareza}}</center></td>
                    <td><center>{{$personaje->color}}</center></td>
                    <td><center>{{$personaje->tipo}}</center></td>
                </tr>
            </tbody>
        </table>
</div>
</div>


    @if (isset($personaje->informacion))
    {{-- En este div se encuentra toda la informacion principal del personajes seleccionado --}}
<div class="row ml-5 mt-5 mr-5">
        <div class="col-12 text-center">
            <table id="informacion" style="width: 100%; " class="float-center mr-2 mt-3">
                <tbody>
                {{-- Aqui estaria el nombre de la Habilidad Principal --}}

                    <tr>
                        <td class="titulo"><b>Habilidad principal</b></td>
                        <td class="descripcion"><strong>{{$personaje->informacion->nombrehp}}l</strong></td>
                    </tr>

                {{-- Aqui estaria la descripcion de la habilidad principal --}}

                    <tr>
                        <td colspan="2">{{$personaje->informacion->habilidadprincipal}}</td>
                    </tr>

                {{--Aqui estaria la descripcion de la HabilidadZ  --}}

                    <tr>
                        <td colspan="2" class="descripcion"><strong>HabilidadZ</strong></td>
                    </tr>

                    <tr>
                        <td colspan="2">{{$personaje->informacion->habilidadz}}</td>
                    </tr>

                {{--  Aqui estaria el nombre de la habilidad unica 1--}}

                    <tr>
                        <td class="titulo"><b>Habilidad Unica 1</b></td>
                        <td class="descripcion"><strong>{{$personaje->informacion->nombrehu}}</strong></td>
                    </tr>

                {{-- Aqui estaria la descripcion de la habilidad unica 1 --}}

                    <tr>
                        <td colspan="2">{{$personaje->informacion->habilidadunica}}</td>
                    </tr>

                {{-- Aqui estaria el nombre de la habilidad unica 2 --}}

                    <tr>
                        <td class="titulo"><b>Habilidad unica 2</b></td>
                        <td class="descripcion"><strong>{{$personaje->informacion->nombrehuu}}</strong></td>
                    </tr>

                {{-- Aqui estaria la descripcion de la habilidad unica 2 --}}

                    <tr>
                        <td colspan="2">{{$personaje->informacion->habilidadunicaa}}</td>
                    </tr>

                {{-- Aqui estaria el episodio al que pertenece el personaje --}}
                    <tr>
                        <td colspan="2" class="descripcion"><strong>Episodios</strong></td>
                    </tr>

                        {{-- En el caso de que no exista se le añade uno --}}
                        @if (isset($personaje->episodio->nombre))
                    <tr>
                        <td colspan="2">{{$personaje->episodio->nombre}}</td>
                    </tr>
                        @else
                    <tr>
                        <td colspan="2"><a href="{{route('episodio.index',$personaje->id)}}"class="btn btn-success">Añadir Episodio</a></td>
                    </tr>
                        @endif

                    {{-- Aqui estaria el tag al que pertenece el personaje  --}}
                    <tr>
                        <td colspan="2" class="descripcion"><strong>Tag</strong></td>
                    </tr>
                        {{-- En el caso de que no exista se le añade --}}
                        @if (isset($personaje->tag->nombre))
                    <tr>
                        <td colspan="2">{{$personaje->tag->nombre}}</td>
                    </tr>
                        @else
                    <tr>
                        <td colspan="2"><a href="{{route('tag.index',$personaje->id)}}"class="btn btn-success">Añadir Tag</a></td>
                    </tr>
                        @endif
            </tbody>
        </table>
    </div>
</div>
</div>
        @else
        @can('direccion')
            <div id="continformacion" class="col-12 text-center" style="margin-left:30%; align-items:center">
                <table id="informacion"  class="mr-5 mt-3">
                    <tbody>
                            <tr>
                                <td class="titulo"><b>Creación de las Informacion</b></td>
                            </tr>
                            <tr>
                                <td>  <a href="{{route('informacion.createe',$personaje->id)}}"class="btn btn-success">Crear Informacion</a>
                                </td>
                            </tr>
                </table>
        </div>
        @endcan
        @endif

    @if (isset($personaje->estadistica))
    {{-- En este div se encuentra todo lo relacionado con las estadisticas del personaje --}}
    <div class="row ml-5 mt-5 mr-5">
        <div class="col-12">
            <table id="informacion" style="width: 100%; " class="float-center mr-2 mt-3">
            <tbody>
                <tr>
                    <td class="info" >
                        <center>
                            <b>Nivel de Poder</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Salud</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Ataque Físico</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Ataque de Ki</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Defensa Fisica</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Defensa de Ki</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Critico</b>
                        </center>
                    </td>

                    <td  class="info" >
                        <center>
                            <b>Velocidad de Recuperacion de Ki</b>
                        </center>
                    </td>

                    <td  class="info" >
                         <center>
                            <b>Ranuras de Equipamiento</b>
                        </center>
                    </td>
                </tr>

                <tr>
                    <td style="font-size:small"><center>{{$personaje->estadistica->niveldepoder}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->salud}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->ataquefisico}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->ataquedeki}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->defensafisica}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->defensadeki}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->critico}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->velocidadderecuperaciondeki}}</center></td>
                    <td style="font-size:small"><center>{{$personaje->estadistica->ranurasdeequipamiento}}</center></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
    @else
{{-- Y en el caso de que no existan las estadisticas aparecera un boton para crearlas --}}
@can('direccion')

     <div id="contestadisticas" class="col-12 text-center" style="margin-left:30%; align-items:center">
        <table id="estadisticas"  class="mr-5 mt-3">
            <tbody>
                    <tr>
                        <td class="titulo"><b>Creación de las Estadisticas</b></td>
                    </tr>
                    <tr>
                        <td>  <a href="{{route('estadistica.createe',$personaje->id)}}"class="btn btn-success">Crear Estadisticas</a>
                        </td>
                    </tr>
        </table>
</div>
    @endcan
    @endif
</div>
@endsection
