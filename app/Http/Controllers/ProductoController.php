<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ProductoController extends Controller
{

    public function index()
    {
        $product = Producto::all();
        //return $product;
        return view('productos.index', compact('product'));

    }


    public function create()
    {
        return view('productos.create');

    }


    public function store(Request $request)
    {
         //return $request->all();
        $product = new Producto();
        $product->cliente = $request->input('nombre');
        $product->caracteristica = $request->input('caracteristica');

        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $product->imagen = $request->file('imagen')->store('public/productos');
        }

        $product->save();
        return "Guardado en inventario";



    }


    public function show(string $id)
    {

        $product = Producto:: find($id);

        return view('productos.show', compact('product'));

    }


    public function edit(string $id)
    {


        $product = Producto:: find($id);

        return view('productos.edit', compact('product'));
    }


    public function update(Request $request, string $id)
    {
        $product = Producto:: find($id);
        $product->fill($request->except('imagen'));

        if ($request->hasFile('imagen')){
            $product->imagen = $request->file('imagen')->store('public/productos');


        $product->save();
        return "Guardado en inventario";

        }


    }


    public function destroy(string $id)
    {

    }
}
