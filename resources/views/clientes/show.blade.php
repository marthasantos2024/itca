{{-- Heredemos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'Clientes')

{{-- Definimos el contenido --}}
@section('content')
    <h1>Clientes</h1>
    <h5>Listado de clientes</h5>
    <hr>
    {{-- Botón para ir al formulario de agregar producto --}}
    <a class="btn btn-danger btn-sm" href="/clientes/create">Agregar nuevo cliente</a>

    <table class="table table-hover table-bordered mt-2">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            {{-- Listado de productos --}}
            @foreach ($clientes as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->edad }}</td>
                    <td>{{ $item->categoria }}</td>
                    <td>
                        <a class="btn btn-success btn-sm" href="/clientes/edit/{{ $item->codigo }}">Modificar</a>
                        <button class="btn btn-danger btn-sm" 
                                onclick="destroy(this)" 
                                url="/clientes/destroy/{{ $item->codigo }}" 
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
    <script src="{{ asset('js/cliente.js') }}"></script>
@endsection
