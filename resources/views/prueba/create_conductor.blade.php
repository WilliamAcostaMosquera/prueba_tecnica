@extends('layouts.plantilla_base')

@section('contenido')
    <h2 CLASS="bg-success text-white text-center">INGRESAR CONDUCTOR</h2>
    <form ACTION="/Conductor" method="POST">
        @csrf
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">DOCUMENTO</label>
                <input id="documento" name="documento" type="text" class="form-control" size="7">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">PRIMER NOMBRE</label>
                <input id="p_nombre" name="p_nombre" type="text" class="form-control" size="7">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">SEGUNDO NOMBRE</label>
                <input id="s_nombre" name="s_nombre" type="text" class="form-control" size="14">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">APELLIDOS</label>
                <input id="apellidos" name="apellidos" type="text" class="form-control"  size="14">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">DIRECCION</label>
                <input id="direccion" name="direccion" type="text" class="form-control" size="20">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">TELEFONO</label>
                <input id="telefono" name="telefono" type="number" class="form-control" min="1111111" max="999999999">
            </div>
            <div class="mb-3">
                <label for="disabledTextInput" class="form-label">CIUDAD</label>
                <input id="ciudad" name="ciudad" type="text" class="form-control" size="15">
            </div>
            <button type="submit" class="btn btn-success" tabindex="4">Submit</button>
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
        @foreach($conductor as $conductores)
            <tr>
                <td>{{$conductores->documento}}</td>
                <td>{{$conductores->p_nombre}}</td>
                <td>{{$conductores->s_nombre}}</td>
                <td>{{$conductores->apellidos}}</td>
                <td>{{$conductores->direccion}}</td>
                <td>{{$conductores->telefono}}</td>
                <td>{{$conductores->ciudad}}</td>
                <td>
                    <a class="btn btn-info btn-success"> editar </a>
                </td>
            </tr>
        @endforeach
        </tbody>
@endsection
