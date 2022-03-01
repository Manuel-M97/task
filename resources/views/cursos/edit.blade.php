@extends('layouts.plantilla')

@section('title', 'Cursos edit')

@section('content')
    <h1>En esta página podras editar un curso</h1>

    <form action="{{ route('cursos.update') }}" method="POST">

        @csrf

        @method('put')
        
        <label>
            Nombre:
            <br>
            <input type="text" name="name" value="{{$curso->name}}">
        </label>

        <br>
        <label>
            Description:
            <br>
            <textarea name="Description" rows="5">{{$curso->description}}</textarea>
        </label>

        <br>
        <label>
            Category:
            <input type="text" name="Category" value="{{$curso->category}}">
        </label>
        <br>
        <button>Actualizar formulario</button>
    </form>
@endsection
