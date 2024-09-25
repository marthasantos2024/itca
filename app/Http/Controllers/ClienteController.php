<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // Listar todos los clientes
        $clientes = Cliente::select(
            "clientes.codigo",
            "clientes.nombre",
            "clientes.edad",
            "categorias.nombre as categoria"
        )
        ->join("categorias", "categorias.codigo", "=", "clientes.categoria")
        ->get();

        // Mostrar vista show.blade.php junto al listado de clientes
        return view('clientes.show')->with(['clientes' => $clientes]);
    
    }

    /**
     * Show the form for creating a new resource.
     * * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Listar categorías para llenar select
        $categorias = Categoria::all();
        
        // Mostrar vista create.blade.php junto al listado de categorías
        return view('clientes.create')->with(['categorias' => $categorias]);
    
    }

    /**
     * Store a newly created resource in storage.
     * * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'categoria' => 'required'
        ]);

        // Enviar insert
        Cliente::create($data);

        // Redireccionar
        return redirect('/clientes/show');
    }

    /**
     * Display the specified resource. 
     *  
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        // Listar categorías para llenar select
        $categorias = Categoria::all();

        // Mostrar vista update.blade.php junto al cliente y las categorías
        return view('clientes.update')->with(['cliente' => $cliente, 'categorias' => $categorias]);
   
    }

    /**
     * Update the specified resource in storage.
     *  
     * @param \Illuminate\Http\Request $request
     * @param Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'edad' => 'required',
            'categoria' => 'required'
        ]);

        // Reemplazar datos anteriores por los nuevos
        $cliente->nombre = $data['nombre'];
        $cliente->edad = $data['edad'];
        $cliente->categoria = $data['categoria'];
        $cliente->updated_at = now();

        // Enviar a guardar la actualización
        $cliente->save();

        // Redireccionar
        return redirect('/clientes/show');
    
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el cliente con el id recibido
        Cliente::destroy($id);

        // Retornar una respuesta json
        return response()->json(['resss' => true]);
    }
}
