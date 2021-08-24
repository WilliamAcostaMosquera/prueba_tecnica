@extends('layouts.plantilla_base')

@section('contenido')
    <h2 CLASS="bg-success text-white text-center">INGRESAR VEHICULO</h2>
    <form ACTION="/Vehiculo" method="POST">
        @csrf
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">PLACA</label>
                <input id="placa" name="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">COLOR</label>
                <input id="color" name="color" type="text" class="form-control" minlength="4" maxlength="15" size="15">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">MARCA</label>
                <input id="marca" name="marca" type="text" class="form-control" minlength="4" maxlength="15" size="15">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">CONDUCTOR</label>
                <select id="conductors_id  " name="conductors_id" class="form-select">
                    <option>-- ESCOJA UNA CATEGORIA --</option>
                    @foreach($conductores as $conductor)
                        <option value="{{ $conductor->id }}">{{$conductor->p_nombre}} {{$conductor->s_nombre}} {{$conductor->apellidos}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">PROPIETARIO</label>
                <select id="propietario_id  " name="propietario_id" class="form-select">
                    <option>-- ESCOJA UNA CATEGORIA --</option>
                    @foreach($propietarios as $propietario)
                        <option value="{{ $propietario->id }}">{{$propietario->p_nombre}} {{$propietario->s_nombre}} {{$propietario->apellidos}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">TIPO DE VEHICULO</label>
                <select id="tdv" name="tdv" class="form-select">
                    <option>-- ESCOJA UNA CATEGORIA --</option>
                    <option>PARTICULAR</option>
                    <option>PLUBLICO</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success" tabindex="4">Submit</button>
        <table class="table table-dark table-striped mt-4">
            <thead>
            <tr>
                <th scope="col">PLACA</th>
                <th scope="col">MARCA</th>
                <th scope="col">COLOR</th>
                <th scope="col">TIPO DE VEHICULO</th>
                <th scope="col">CONDUCTOR</th>
                <th scope="col">PROPIETARIO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehiculos as $vehiculo)
                <tr>
                    <td>{{$vehiculo->placa}}</td>
                    <td>{{$vehiculo->marca}}</td>
                    <td>{{$vehiculo->color}}</td>
                    <td>{{$vehiculo->tdv}}</td>
                    <td>{{$vehiculo->conductors_id}}</td>
                    <td>{{ $vehiculo->propietario_id }} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </form>
@endsection
