@extends('layouts.plantilla_base')

@section('contenido')
    <div class="row ">
        <div class="col-4  ">
            <a href="Vehiculo/create" class="btn btn-success ">CREAR VEHICULO</a>
        </div>
        <div class="col-4">
            <a href="Conductor/create" class="btn btn-success ">CREAR CONDUCTOR</a>
        </div>
        <div class="col-4">
            <a href="Propietario/create" class="btn btn-success ">CREAR PROPIETARIO</a>
        </div>
    </div>


    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">Placa</th>
                <th scope="col">Marca</th>
                <th scope="col">Conductor</th>
                <th scope="col">Propietario</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehiculo as $vehiculos)
                <tr>
                    <td>{{$vehiculos->placa}}</td>
                    <td>{{$vehiculos->marca}}</td>
                    <td>{{$vehiculos->conductors_id}}</td>
                    <td>{{$vehiculos->propietario_id}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
