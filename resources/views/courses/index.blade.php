@extends('layout.layout')

@section('title', 'Cursos-index')

@section('content')
@forelse($courses as $course)

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<div class="card-header d-inline-flex">
    <b>Cursos</b>
    <a href="{{ route('courses.create')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-plus"></i>
        Agregar
    </a>
</div>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$course->code}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$course->name}}</h6>
        <p class="card-text">{{$course->duration}}</p>
        <a class="card-text">{{$course->start}}</a>
        <a class="card-text">{{$course->end}}</a>
        <br>
        <p class="card-">
            <a href="{{route('courses.show', $course->id)}}" class="btn btn-info btn-sm">
            <i class="far fa-eye"></i>
            </a>
            <a href="{{route('courses.edit', $course->id)}}" class="btn btn-primary btn-sm">
                <i class="fa fa-edit"></i>
            </a>
            <button type="submit" class="btn btn-danger btn-sm" form="delete_{{$course->id}}" onclick="return confirm('¿Estas seguro que deseas eliminar el item?')">
                <i class="fa fa-trash"></i>
            </button>
            <form action="{{route('courses.destroy', $course->id)}}" id="delete_{{$course->id}}" method="post" enctype="multipart/form-data" hidden>
                @csrf
                @method('DELETE')
            </form>
</p>
    </div>
</div>
@empty
<h1>No hay información para mostrar.</h1>
@endforelse

@endsection