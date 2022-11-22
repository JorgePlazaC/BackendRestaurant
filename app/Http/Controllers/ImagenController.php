<?php

namespace App\Http\Controllers;

use App\Models\Imagen;
use App\Http\Requests\StoreImagenRequest;
use App\Http\Requests\UpdateImagenRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Imagen::orderBy('id')->get();
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
     * @param  \App\Http\Requests\StoreImagenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagenRequest $request)
    {
        return Imagen::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function show(Imagen $imagen)
    {
        return $imagen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function edit(Imagen $imagen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImagenRequest  $request
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagenRequest $request, Imagen $imagen)
    {
        $imagen->update($request->all());
        return $imagen;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imagen  $imagen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Imagen $imagen)
    {
        $imagen->delete();
        return 'Eliminado exitosamente';
    }

    public function BuscarPorIdImagen(Request $request)
    {
        $idImagen = $request->idImagen;

        if ($idImagen == null) {
            return 'Categoria no ingresada';
        } else {
            $Imagen = Imagen::where('id', $idImagen)->first();
            return $Imagen;
        }
    }

    public function uploadImage(Request $request)
    {
        $validator = Validator::make($request->all(), ['image' => ['required', File::image()->max(2 * 1024)]]);
        if ($validator->fails()) return response()->json($validator->messages());
        $image = new Imagen();
        $file = $request->file('image');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->move(public_path('public/images'), $filename);
        $url = URL::to('/') . '/public/images/' . $filename;
        $image['url'] = $url;
        $image->save();
        return response()->json(['isSuccess' => true, 'url' => $url]);
    }
}
