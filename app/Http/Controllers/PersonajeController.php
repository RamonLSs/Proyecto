<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonajeRequest;
use App\Personaje;
use App\Episodio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rarezas = ['Sparking','Extreme','Hero'];
        $colores = ['Rojo','Azul','Verde','Amarillo','Morado','Blanco'];
        $episodios = Episodio::all();

        $miRareza = $request->get('rareza');
        $miColor = $request->get('color');
        $miEpisodio = $request->get('episodios');

        $personajes = Personaje::orderBy('id','ASC')
        ->rareza($miRareza)
        ->color($miColor)
        ->episodio($miEpisodio)
        ->get();

        return view('personajes.index', compact('personajes','rarezas','colores','episodios','request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonajeRequest $request)
    {
        $datos = $request->validated();

        $personaje = new Personaje();
        $personaje->nombre=ucwords($datos['nombre']);
        $personaje->rareza=ucwords($datos['rareza']);
        $personaje->color=ucwords($datos['color']);
        $personaje->tipo=ucwords($datos['tipo']);


        if(isset($datos['imagen'])){
            $file = $datos['imagen'];
            $nombre = 'personajes/'.$file->getClientOriginalName();

            Storage::disk('public')->put($nombre, File::get($file));

            $personaje->imagen ="img/$nombre";
        }



        $personaje->save();
        return redirect()->route('personajes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function show(Personaje $personaje)
    {
        return view('personajes.detalles',compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Personaje $personaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personaje $personaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personaje  $personaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personaje $personaje)
    {
        $personaje->delete();
        return redirect()->route('personajes.index');
    }
}
