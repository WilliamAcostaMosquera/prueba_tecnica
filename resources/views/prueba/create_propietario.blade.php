@extends('layouts.plantilla_base')

@section('contenido')
    <h2 CLASS="bg-success text-white text-center">INGRESAR PROPIETARIO</h2>
    <form ACTION="/vehiculos" method="POST">
        <fieldset>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">DOCUMENTO</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">PRIMER NOMBRE</label>
                <input id="color" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">SEGUNDO NOMBRE</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">APELLIDOS</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">DIRECCION</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">TELEFONO</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">CIUDAD</label>
                <input id="placa" type="text" class="form-control" minlength="4" maxlength="6" size="6">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </fieldset>
    </form>
    <table class="table table-dark table-striped mt-4">
        <thead>
        <tr>
            <th scope="col">DOCUMENTO</th>
            <th scope="col">PRIMER NOMBRE</th>
            <th scope="col">SEGUNDO NOMBRE</th>
            <th scope="col">APELLIDOS</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">CIUDAD</th>

        </tr>
        </thead>
        <tbody>

        </tbody>
@endsection
