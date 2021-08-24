<?php

namespace App\Http\Controllers;

use App\Models\Conductor;
use App\Models\Propietario;
use App\Models\vehiculo;
use Illuminate\Http\Request;
use App\Http\PropietarioController;
use App\Http\ConductorController;
use App\Http\vehiculocontroler;

class vehiculo_create extends Controller
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
    public function create()
    {
        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        $vehiculos = vehiculo::all();
        return view('prueba.create_vehiculo') ->with('propietarios',$propietarios) ->with('conductores',$conductores) ->with('vehiculos',$vehiculos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculos = new vehiculo();

        $vehiculos -> placa = $request->get('placa');
        $vehiculos -> color = $request->get('color');
        $vehiculos -> marca = $request->get('marca');
        $vehiculos -> tdv = $request->get('tdv');
        $vehiculos -> propietario_id  = $request->get('propietario_id');
        $vehiculos -> conductors_id  = $request->get('conductors_id');

        $vehiculos -> save();

        $propietarios = Propietario::all();
        $conductores = Conductor::all();
        $vehiculos = vehiculo::all();
        return view('prueba.create_vehiculo') ->with('propietarios',$propietarios) ->with('conductores',$conductores) ->with('vehiculos',$vehiculos);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
