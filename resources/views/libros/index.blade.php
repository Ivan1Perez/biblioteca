@extends('plantilla')
@section('titulo', 'Libros')


@section('contenido')
    @forelse ($libros as $libro)
        <h1><a href="{{route('libros.show', $libro)}}">{{ $libro->titulo }}</a></h1>
        <h3>{{ $libro->editorial }}</h3>
        <br>
        <br>
    @empty
        <h3>No hay libros</h3>
    @endforelse
@endsection
