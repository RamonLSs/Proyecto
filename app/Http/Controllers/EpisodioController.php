<?php

namespace App\Http\Controllers;

use App\Episodio;
use App\Personaje;
use Illuminate\Http\Request;

class EpisodioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $episodios = Episodio::all();

        return view('episodios.create', compact('episodios','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id_episodio = $request->input('episodio');


        $personaje = Personaje::find($request->personaje_id);

        $personaje->episodio_id = $id_episodio;

        $personaje->update();

        return redirect('/personajes/'.$request->personaje_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function show(Episodio $episodio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function edit(Episodio $episodio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Episodio $episodio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Episodio  $episodio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Episodio $episodio)
    {
        //
    }
}
