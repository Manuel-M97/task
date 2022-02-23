@extends('layouts.plantilla')

@section('title', 'Cursos create')

@section('content')
    <h1>En esta página podas crear un nuevo curso</h1>

    <form action="{{ route('cursos.store') }}" method="POST">

        @csrf
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name">
        </label>

        <br>
        <label>
            Description:
            <br>
            <textarea name="Description" rows="5"></textarea>
        </label>

        <br>
        <label>
            Category:
            <input type="text" name="Category">
        </label>
        <br>
        <button>Enviar formulario</button>
    </form>
@endsection
