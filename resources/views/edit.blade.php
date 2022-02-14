@extends('layouts.master')

@section('peli', $peli)

@section('contenido')
<form action="{{ route('articulos.update', $editar->id) }}" method="POST">
    @csrf
    <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo" value="{{ $editar->titulo }}">
    </div>
    <div>
        <label for="titulo">Contenido</label>
        <input type="text" name="contenido" id="contenido" value="{{ $editar->contenido }}">
    </div>
    <input type="submit" value="Editar">
</form>
<p><a href="{{ route('articulos.index') }}">Volver atras</a></p>
@endsection