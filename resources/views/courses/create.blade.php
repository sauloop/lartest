@extends('layouts.plantilla')

@section('title','Crear curso')

@section('content')
<h1>Crear curso</h1>
<br>
<a href="{{route('courses.index')}}">Volver a cursos</a>
<br><br>
<form action="{{route('courses.store')}}" method="POST">
    @csrf

    <label for="name">Nombre:</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="description">Descripción:</label><br>
    <input type="text" id="description" name="description"><br><br>
    <input type="submit" value="Enviar">
</form>
@endsection