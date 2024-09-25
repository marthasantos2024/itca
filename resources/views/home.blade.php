{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Inicio')

{{-- Definimos el contenido --}}
@section('content')
<h1>Pantalla de Inicio</h1>
Nombre: <b>{{$nombre}}</b><br>
Apellido: <b>{{$apellido}}</b>
@endsection