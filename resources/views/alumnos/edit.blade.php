@extends('layout')

@section('content')
    <h1>Editar Alumno</h1>
    <form action="{{ route('alumnos.update', $alumno->id) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="{{ $alumno->nombre }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Apellido:</label>
            <input type="text" name="apellido" value="{{ $alumno->apellido }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" value="{{ $alumno->email }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Actualizar</button>
    </form>
@endsection
