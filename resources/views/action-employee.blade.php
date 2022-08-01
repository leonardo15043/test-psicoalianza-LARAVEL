@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5"> @if ($employee['id']) Editar @else Crear @endif  Empleado</h1>

@if ($employee['id'])
<form action="{{ route('employee.update',$employee['id']) }}" method="POST" class="row g-3">
@method('PUT')
@else
<form action="{{ route('employee.store') }}" method="POST" class="row g-3">
@endif
  @csrf
  <div class="col-md-6">
    <label for="firtsname" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="firstname" name="firstname" value="{{ $employee['firstname'] }}">
    @error('firtsname')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="firtsname" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="lastname" name="lastname" value="{{ $employee['lastname'] }}">
    @error('lastname')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="identification" class="form-label">Identificación</label>
    <input type="text" class="form-control" id="identification" name="identification" value="{{ $employee['identification'] }}">
    @error('identification')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="phone" class="form-label">Teléfono</label>
    <input type="number" class="form-control" id="phone" name="phone" value="{{ $employee['phone'] }}">
    @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="address" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $employee['address'] }}">
    @error('address')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <location :employee="{{ $employee }}"></location>
  <div class="col-md-6">
    <label for="cityBirt" class="form-label">Cargo</label>
    <select class="form-select" multiple id="position" name="position[]" >
        @foreach( $positions as $position )
          <option value="{{ $position->id }}" {{ in_array( $position->id , $listPositions ) ? 'selected' : '' }}>{{ $position->name }}</option>
        @endforeach
    </select>
  </div>
  <div class="col-md-6">
    <label for="cityBirt" class="form-label">Jefe</label>
    <select class="form-select" id="manager" name="manager">
        <option value="">Seleccionar un jefe</option>
        @foreach( $employees as $em )
          <option value="{{ $em->id }}" {{ $employee['manager'] == $em->id ? 'selected' : '' }}  >{{ $em->firstname.' '.$em->lastname }}</option>
        @endforeach
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
@endsection 
