@extends('layouts.plantilla_base')

@section('contenido')
    <h2 CLASS="bg-success text-white text-center">INGRESAR VEHICULO</h2>
    <form ACTION="/vehiculos" method="POST">
        <fieldset>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">PLACA</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">COLOR</label>
                <input id="color" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">MARCA</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">TIPO DE VEHICULO</label>
                <select id="tdv" class="form-select">
                    <option>-- ESCOJA UNA CATEGORIA --</option>
                    <option>PARTICULAR</option>
                    <option>PLUBLICO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">CONDUCTOR</label>
                <input id="conductor" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">PROPIETARIO</label>
                <input id="propietario" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
    </form>
@endsection
