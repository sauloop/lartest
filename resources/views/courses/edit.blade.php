@extends('layouts.plantilla')

@section('title','Editar curso')

@section('content')
<h1>Editar curso</h1>
<br>
<a href="{{route('courses.index')}}">Volver a cursos</a>
<br><br>
<form action="{{route('courses.update', $course)}}" method="POST">
    @csrf

    @method('PUT')

    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name" value="{{$course->name}}"><br><br>
    <label for="description">Descripción:</label><br>
    <input type="text" id="description" name="description" value="{{$course->description}}"><br><br>
    <input type="submit" value="Actualizar">
</form>
@endsection