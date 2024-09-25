
{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'categorias')

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear</h1>
<h5>Formulario para crear categorias</h5>
<hr>
<div class="container">
    <form action="/categorias/store" method="POST">
        @csrf
        <div class="row">
            <div class="col-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre">
                @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        
        <div class="col-12 mt-2">
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
@endsection