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
        @foreach( $employees as $employee )
        <tr>
            <th scope="row">1</th>
            <td>{{ $employee->firstname }}</td>
            <td>{{ $employee->lastname }}</td>
            <td>{{ $employee->identification }}</td>
            <td>{{ $employee->address }}</td>
            <td>{{ $employee->phone }}</td>
            <td>{{ $employee->cityBirth }}</td>
            <td>
                
                <form action="{{ route('employee.destroy',$employee->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a class="btn btn-primary" href="{{ route('employee.edit',$employee->id) }}">Editar</a>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

  </table>
@endsection