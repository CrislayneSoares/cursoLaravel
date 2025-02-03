@extends('layouts.admin')

@section('content')

    <h2>Visualizar o curso</h2>
    <a href="{{ route('courses.index') }}">Listar cursos</a><br>
    <a href="{{ route('courses.edit') }}">Editar cursos</a><br>
    <button type="button" class="btn btn-outline-primary">Primary</button>

@endsection
