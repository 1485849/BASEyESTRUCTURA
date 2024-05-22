@extends('layout')

@section('content')
    <h1>Detalles del Alumno</h1>
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $alumno->nombre }} {{ $alumno->apellido }}</h5>
            <p class="card-text">Email: {{ $alumno->email }}</p>
            <a href="{{ route('alumnos.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Volver</a>
        </div>
    </div>
@endsection
