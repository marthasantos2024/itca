{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Clientes')

{{-- Definimos el contenido --}}
@section('content')
<h1>Crear</h1>
<h5>Formulario para crear clientes</h5>
<hr>
<div class="container">
    <form action="/clientes/store" method="POST">
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
            
            <div class="col-6">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad" id="edad">
                @error('edad')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="col-12 mt-3">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" class="form-control">
                @foreach ($categorias as $item)
                    <option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
                @endforeach
            </select>
            @error('categoria')
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