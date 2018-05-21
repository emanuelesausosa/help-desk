<?php

namespace App\Http\Controllers;

use App\ContenidoPortada;
use Illuminate\Http\Request;
use App\Http\Resources\ContenidoPortadaResource;

class ContenidoPortadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenidos = ContenidoPortada::all();

        return ContenidoPortadaResource::collection($contenidos);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContenidoPortada  $contenidoPortada
     * @return \Illuminate\Http\Response
     */
    public function show(ContenidoPortada $contenidoPortada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContenidoPortada  $contenidoPortada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContenidoPortada $contenidoPortada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContenidoPortada  $contenidoPortada
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContenidoPortada $contenidoPortada)
    {
        //
    }
}
