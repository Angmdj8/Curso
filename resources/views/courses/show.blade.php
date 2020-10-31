@extends('layout.layout')

@section('title', 'Cursos-show')

@section('content')
    @forelse($courses as $course)
    @empty
        <h1>No hay información para mostrar.</h1>
    @endforelse

@endsection