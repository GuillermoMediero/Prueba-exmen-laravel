@extends('layouts.master')

@section('peli', $peli)

@section('contenido')
    <table>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Contenido</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->titulo }}</td>
                    <td>{{ $articulo->contenido  }}</td>
                    <td><a href="{{ route('articulos.show' ,  $articulo->id) }}">Mostrar mas</a></td>
                    <form>
                        @csrf
                        @method("DELETE")
                    <td><a href="{{ route('articulos.destroy' ,  $articulo->id) }}">Eliminar</a></td>
                    </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('articulos.create') }}">Crear articulo</a>

@endsection