<?php

namespace App\Http\Controllers;

use App\Http\Requests\InformacionRequest;
use App\Informacion;
use App\Personaje;
use Illuminate\Http\Request;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view ('informacions.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformacionRequest $request)
    {

        $datos = $request->validated();

        $informacion = new Informacion();
        $informacion->nombrehp=ucwords($datos['nombrehp']);
        $informacion->habilidadprincipal=ucwords($datos['habilidadprincipal']);
        $informacion->habilidadz=ucwords($datos['habilidadz']);
        $informacion->nombrehu=ucwords($datos['nombrehu']);
        $informacion->habilidadunica=ucwords($datos['habilidadunica']);
        $informacion->nombrehuu=ucwords($datos['nombrehuu']);
        $informacion->habilidadunicaa=ucwords($datos['habilidadunicaa']);

        $informacion->save();

        $id_informacion = Informacion::all()->last()->id;

        $personaje = Personaje::find($request->personaje_id);
        $personaje->informacion_id = $id_informacion;

        $personaje->update();

        return redirect('/personajes/'.$request->personaje_id);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function show(Informacion $informacion)
    {
        // return view('personajes.detalles',compact('informacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Informacion $informacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informacion $informacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Informacion  $informacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informacion $informacion)
    {
        //
    }
}
