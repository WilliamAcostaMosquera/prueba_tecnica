<?php

namespace App\Http\Controllers;

use App\Models\Propietario;
use Illuminate\Http\Request;

class PropietarioController extends Controller
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
        return view('prueba.create_propietario')->with('propietarios', $propietarios);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propietarios = new Propietario();

        $propietarios -> documento = $request->get('documento');
        $propietarios -> p_nombre = $request->get('p_nombre');
        $propietarios -> s_nombre = $request->get('s_nombre');
        $propietarios -> apellidos = $request->get('apellidos');
        $propietarios -> direccion = $request->get('direccion');
        $propietarios -> telefono = $request->get('telefono');
        $propietarios -> ciudad = $request->get('ciudad');

        $propietarios -> save();

        $propietarios = Propietario::all();
        return view('prueba.create_conductor')->with('conductor', $propietarios);
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
