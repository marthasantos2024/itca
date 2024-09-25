<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listar todas las categorias
        $categorias = Categoria::all();

        return view('categorias.show')->with(['categorias' => $categorias]);

        
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // Mostrar vista para crear una nueva categoría
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
        ]);

        // Crear nueva categoría
        Categoria::create($data);

        // Redireccionar a la lista de categorías
        return redirect('/categorias/show');
    }

    /**
     * Display the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoria $categoria)
    {
        //Obtener la categoría a editar
        return view('categorias.update')->with(['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoria $categoria)
    {
        //Validar campos
        $data = request()->validate([
            'nombre' => 'required',
        ]);
        // Reemplazar datos anteriores por los nuevos
        $categoria->nombre = $data['nombre'];
        $categoria->updated_at = now();

        // Enviar a guardar la actualización
        $categoria->save();


        // Redireccionar a la lista de categorías
        return redirect('/categorias/show');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Respons
     */
    public function destroy($id)
    {
        // // Eliminar la categoria con el id recibido
        Categoria::destroy($id);

        // Retornar una respuesta json
        return response()->json(['ress' => true]);

    }
}
