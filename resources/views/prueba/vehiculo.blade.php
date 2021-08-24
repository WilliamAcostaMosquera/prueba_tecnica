@extends('layouts.plantilla_base')

@section('contenido')
    <a href="/create" class="btn btn-success">Crear vehiculo</a>

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
                    <td>{{$vehiculo->placa}}}</td>
                    <td>{{$vehiculo->marca}}}</td>
                    <td>{{$vehiculo->conductor}}}</td>
                    <td>{{$vehiculo->propietario}}}</td>
                    <td>
                        <a class="btn btn-info btn-success"> editar </a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection
