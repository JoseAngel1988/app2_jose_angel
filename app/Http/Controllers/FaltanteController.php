<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Faltante;
use Illuminate\Http\Request;

class FaltanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $product = Faltante::all();
        //return $product;
        return view('faltantes.index', compact('product'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('faltantes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request->all();//

        $product = new Faltante();
        $product ->nombre = $request->input("nombre");
        $product ->caracteristica = $request->input("caracteristica");
        $product ->cantidad = $request->input("cantidad");

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $product->imagen = $request->file('imagen')->store('public/productos');
        }

        $product->save();
        return "Guardar en inventario";


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Faltante:: find($id);

        return view('faltantes.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Faltante:: find($id);

        return view('faltantes.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Faltante:: find($id);
        $product->fill($request->except('imagen'));

        if ($request->hasFile('imagen')){
            $product->imagen = $request->file('imagen')->store('public/productos');


        $product->save();
        return "Guardado en inventario";

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
