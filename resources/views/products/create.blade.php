{{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Productos')

{{-- Definimos el contenido --}}
@section('content')
    <h1 class="text-center">Crear</h1>
    <h5 class="text-center">Formulario para crear productos</h5>
    <hr>
    
    <div class="container">
        <form action="/products/store" method="POST">
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
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" name="precio" id="precio">
                    @error('precio')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            
            <div class="col-12 mt-3">
                <label for="marca">Marca</label>
                <select name="marca" id="marca" class="form-control">
                    @foreach ($marcas as $item)
                        <option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
                    @endforeach
                </select>
                @error('marca')
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
