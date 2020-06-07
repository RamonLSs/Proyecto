<?php

namespace App\Http\Controllers;

use App\Estadistica;
use App\Personaje;
use Illuminate\Http\Request;
use App\Http\Requests\EstadisticaRequest;
class EstadisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('estadisticas.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstadisticaRequest $request)
    {


        $datos = $request->validated();

        $estadistica = new Estadistica();
        $estadistica->niveldepoder = $datos['niveldepoder'];
        $estadistica->salud = $datos['salud'];
        $estadistica->ataquefisico = $datos['ataquefisico'];
        $estadistica->ataquedeki = $datos['ataquedeki'];
        $estadistica->defensafisica = $datos['defensafisica'];
        $estadistica->defensadeki = $datos['defensadeki'];
        $estadistica->critico = $datos['critico'];
        $estadistica->velocidadderecuperaciondeki = $datos['velocidadderecuperaciondeki'];
        $estadistica->ranurasdeequipamiento = $datos['ranurasdeequipamiento'];

        $estadistica->save();

        $id_estadistica = Estadistica::all()->last()->id;

        $personaje = Personaje::find($request->personaje_id);

        $personaje->estadistica_id = $id_estadistica;

        $personaje->update();

        return redirect('/personajes/'.$request->personaje_id);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function show(Estadistica $estadistica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function edit(Estadistica $estadistica)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadistica $estadistica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadistica  $estadistica
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estadistica $estadistica)
    {
        //
    }
}
