@extends('layouts.app')

@section('titulo', 'ingresar producto')

@section('contenido')

<br>
<h3 class="text-center">Ingresar a inventario</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/productos/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombre">Agregar producto</label>
        <input name="cliente" id="nombreproducto" value="{{$product->cliente}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="caracteristica">Agregar novedad</label>
        <input name="caracteristica" id="caracteristica" value="{{$product->caracteristica}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar inventario</button>
</form>

@endsection
