{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Clientes')

{{-- Definimos el contenido --}}
@section('content')
<h1>Modificar</h1>
<h5>Formulario para actualizar clientes</h5>
<hr>
<div class="container">
    <form action="/clientes/update/{{ $cliente->codigo }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $cliente->nombre }}">
                @error('nombre')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-6">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" name="edad" id="edad" value="{{ $cliente->edad }}">
                @error('edad')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="col-12 mt-3">
            <label for="categoria">Marca</label>
            <select name="categoria" id="categoria" class="form-control">
                @foreach ($categorias as $item)
                    <option value="{{ $item->codigo }}" {{ ($item->codigo == $cliente->categoria) ? 'selected' : '' }}>
                        {{ $item->nombre }}
                    </option>
                @endforeach
            </select>
            @error('categoria')
                <span class="invalid-feedback d-block" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-12 mt-2">
            <button class="btn btn-primary">Guardar</button>
        </div>
    </form>
</div>
                        
@endsection