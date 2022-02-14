@extends('layouts.master')

@section('peli', $peli)
@section('contenido')
    @if(Auth::check())
    <table>
        <thead>
            <tr>
                <td>Titulo</td>
                <td>Contenido</td>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $detalles->titulo }}</td>
                    <td>{{ $detalles->contenido }}</td>
                </tr>
        </tbody>
    </table>
        @foreach ($comentarios as $comentario)
            <p>{{ $comentario->comentario }}</p>
        @endforeach
    @else
        <p>Para ver debe <a href="{{ route('home') }}">Iniciar sesion</a></p>
    @endif
    <p><a href="{{ route('articulos.index') }}">Volver atras</a></p>
@endsection