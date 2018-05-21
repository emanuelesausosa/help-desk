<?php

namespace App\Http\Controllers;

use App\Organizacion;
use Illuminate\Http\Request;
use App\Http\Resources\OrganizacionResource;


class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $organizaciones = Organizacion::all();

        return OrganizacionResource::collection($organizaciones);
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
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Organizacion $organizacion)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizacion $organizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizacion $organizacion)
    {
        //
    }
}
