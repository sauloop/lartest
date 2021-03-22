@extends('layouts.plantilla')

@section('title','Home')

@section('content')
<h1>Página principal</h1>
<br><br>
<a href="{{route('courses.index')}}">Cursos</a>
<br><br>
<h2>Usuarios:</h2>
@foreach ($users as $user)
<div>
    <ul>
        <li>Nombre: {{$user['name']}}</li>
    </ul>
</div>
@endforeach
@endsection