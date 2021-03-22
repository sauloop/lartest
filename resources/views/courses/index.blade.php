@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
<br>
<h1>Cursos</h1>
<br>
<a href="{{route('home')}}">Inicio</a>
<br><br>
<a href="{{route('courses.create')}}">Crear curso</a>
<br><br>
<ul>
    @foreach ($courses as $course)
    <li><a href="{{route('courses.show',$course)}}">{{$course->name}}</a></li>
    @endforeach
</ul>
<br>
{{$courses->links()}}
@endsection