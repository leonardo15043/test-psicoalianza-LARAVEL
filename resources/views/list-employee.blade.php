@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5">Lista de Empleados</h1>
<a href="{{ url('/employee/create') }}" class="btn btn-primary">Agregar</a>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Identificación</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Ciudad de nacimiento</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Leonardo Arturo</td>
            <td>Hernandez Espinosa</td>
            <td>10222334455</td>
            <td>Cll falsa 123</td>
            <td>5252525252</td>
            <td>Bogotá</td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Leonardo Arturo</td>
            <td>Hernandez Espinosa</td>
            <td>10222334455</td>
            <td>Cll falsa 123</td>
            <td>5252525252</td>
            <td>Bogotá</td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Leonardo Arturo</td>
            <td>Hernandez Espinosa</td>
            <td>10222334455</td>
            <td>Cll falsa 123</td>
            <td>5252525252</td>
            <td>Bogotá</td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Leonardo Arturo</td>
            <td>Hernandez Espinosa</td>
            <td>10222334455</td>
            <td>Cll falsa 123</td>
            <td>5252525252</td>
            <td>Bogotá</td>
            <td>
                <button type="button" class="btn btn-primary">Editar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
    </tbody>

  </table>

@endsection 
