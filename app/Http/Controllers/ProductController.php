<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Branch;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Listar todos los productos
        $productos = Product::select(
            "productos.codigo",
            "productos.nombre", 
            "productos.precio",
            "marcas.nombre as marca"
        )
        ->join("marcas", "marcas.codigo", "=", "productos.marca")
        ->get();

        // Mostrar vista show.blade.php junto al listado de productos
        return view('products.show')->with(['productos' => $productos]);
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Listar marcas para llenar select
        $marcas = Branch::all();
        
        // Mostrar vista create.blade.php junto al listado de marcas
        return view('products.create')->with(['marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Iluminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        // Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marca' => 'required'
        ]);

        // Enviar insert
        Product::create($data);

        // Redireccionar
        return redirect('/products/show');
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
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // listar maras para llenar select
        $marcas = Branch::all();


        // Mostrar vista update.blade.php junto al listado de marcas
        return view('products.update')->with(['producto' => $product, 'marcas' => $marcas]);
    }

    /**
     * Update the specified resource in storage.
     * @param \Iluminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //Validar campos
        $data = request()->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'marca' => 'required'
        ]);

        // Reemplazar datos anteriores por los nuevos
        $product->nombre = $data['nombre'];
        $product->precio = $data['precio'];
        $product->marca = $data['marca'];
        $product->updated_at = now();

        // Enviar a guardar la actualización
        $product->save();

        // Redireccionar
        return redirect('/products/show');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar el producto con el id recibido
        Product::destroy($id);

        // Retornar una respuesta json
        return response()->json(['res' => true]);

    }
}
