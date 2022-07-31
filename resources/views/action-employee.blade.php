@extends('layouts.app')
@section('content')
<h1 class="display-6 mb-5">Crear Empleado</h1>
<form action="{{ route('employee.store') }}" method="POST" class="row g-3">
  @csrf
  <div class="col-md-6">
    <label for="firtsname" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
    @error('firtsname')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="firtsname" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
    @error('lastname')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="identification" class="form-label">Identificación</label>
    <input type="text" class="form-control" id="identification" name="identification">
    @error('identification')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-6">
    <label for="phone" class="form-label">Teléfono</label>
    <input type="number" class="form-control" id="phone" name="phone">
    @error('phone')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <div class="col-md-12">
    <label for="address" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="address" name="address">
    @error('address')
      <div class="invalid-feedback">{{ $message }}</div>
    @enderror
  </div>
  <location></location>
  <div class="col-md-6">
    <label for="cityBirt" class="form-label">Cargo</label>
    <select class="form-select" multiple id="position" name="position">
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
        <option value="3">Three</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="cityBirt" class="form-label">Jefe</label>
    <select class="form-select" id="manager" name="manager">
        <option selected>Seleccionar un jefe</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
</form>
@endsection 
