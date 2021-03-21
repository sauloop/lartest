@extends('layouts.plantilla')

@section('title','Curso '. $course->name)

@section('content')
<br>
<h1>Curso: {{$course->name}}</h1>
<br>
<a href="{{route('courses.index')}}">Volver a cursos</a>
<br><br>
<a href="{{route('courses.edit',$course)}}">Editar</a>
<br>
<p>Descripción: {{$course->description}}</p>
@endsection