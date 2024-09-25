{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Categorias')

{{-- Definimos el contenido --}}
@section('content')
<h1>Categorias</h1>
<h5>Listado de Categorias</h5>
<hr>

    {{-- Botón para ir al formulario de agregar categorias --}}
    <a class="btn btn-danger btn-sm" href="/categorias/create">Agregar nueva categoria</a>

    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
               
            </tr>
        </thead>
        <tbody>
            {{-- Listado de categorias --}}
            @foreach ($categorias as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/categorias/edit/{{ $item->codigo }}">Modificar</a>
                        <button class="btn btn-danger btn-sm" 
                                onclick="destroy(this)" 
                                url="/categorias/destroy/{{ $item->codigo }}" 
                                token="{{ csrf_token() }}">
                            Eliminar
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('scripts')
    {{-- SweetAlert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- JS --}}
    <script src="{{ asset('js/categoria.js') }}"></script>
@endsection
