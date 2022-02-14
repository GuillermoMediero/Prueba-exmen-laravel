@extends('layouts.master')

@section('contenido')
    <form action="{{ route('articulos.store') }}" method="POST">
        @csrf
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo" id="titulo">
        </div>
        <div>
            <label for="titulo">Contenido</label>
            <input type="text" name="contenido" id="contenido">
        </div>
        <input type="submit" value="Crear">
    </form>
    <p><a href="{{ route('articulos.index') }}">Volver atras</a></p>
@endsection