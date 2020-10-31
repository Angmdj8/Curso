@extends('layout.layout')

@section('title', 'Crear curso')

@section('content')

    <form action="{{route('cursos.store')}}" method="POST">

        @csrf
        <div>
            <lavel for="">Código del curso:</lavel>
            <input type="text" name="code" id="code">
        </div>
        <div>
            <lavel for="">Curso:</lavel>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <lavel for="">Description:</lavel>
            <textarea name="description" id="" cols="30" rows="5"></textarea>
        </div>
        <div>
            <lavel for="">URL:</lavel>
            <input type="text" name="url" id="url">
        </div>
        <div>
            <lavel for="">Duración en horas:</lavel>
            <input type="number" name="duration" id="duration">
        </div>
        
        <div>
            <lavel for="">Inicio:</lavel>
            <input type="date" name="start" id="start">
        </div>
        <div>
            <lavel for="">Finaliza:</lavel>
            <input type="date" name="end" id="end">
        </div>
        
        <div>
            <input type="submit" value="Guardar">
        </div>
    </form>

@endsection