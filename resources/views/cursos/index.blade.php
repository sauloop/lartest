@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')
<br>
<h1>Cursos</h1>
<br>
<a href="{{route('cursos.create')}}">Crear curso</a>
<br><br>
<ul>
    @foreach ($courses as $course)
    <li><a href="{{route('cursos.show',$course->id)}}">{{$course->name}}</a></li>
    @endforeach
</ul>
<br>
{{$courses->links()}}
@endsection