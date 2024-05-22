@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Lista de Alumnos</h1>
        <a href="{{ route('alumnos.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Crear Alumno</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre }}</td>
                    <td>{{ $alumno->apellido }}</td>
                    <td>{{ $alumno->email }}</td>
                    <td>
                        <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Ver</a>
                        <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>
                        <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
