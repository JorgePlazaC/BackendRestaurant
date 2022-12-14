<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoRequest;
use App\Http\Requests\UpdateProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Producto::orderBy('id')->get();
    }

    public function cartastica(){

        return view('carta');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {
        return Producto::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return $producto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductoRequest  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductoRequest $request, Producto $producto)
    {
        $producto->update($request->all());
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return 'Eliminado exitosamente';
    }


    public function BuscarPorIdCategoria(Request $request)
    {
        $idCategoria = $request->idCategoria;
        $arrayProductos = [];

        if ($idCategoria == null) {
            return 'Categoria no ingresada';
        } else {
            $Productos = Producto::where('idCategoria', $idCategoria)->get();
            foreach ($Productos as $prod)
                {
                if($prod->estado == 1){
                    array_push($arrayProductos, $prod);
                }
                }
            return $arrayProductos;
        }
    }

    public function ProductosActivos()
    {
        $Productos = Producto::where('estado', 1)->get();
        return $Productos;
    }

    public function ProductosInactivos()
    {
        $Productos = Producto::where('estado', 0)->get();
        return $Productos;
    }
}
