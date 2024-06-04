@extends('layouts.app')

@section('titulo', 'ingresar producto')

@section('contenido')

<br>
<h3 class="text-center">Ingresar a inventario</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/faltantes/{{$product->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombre">Agregar producto</label>
        <input name="nombre" id="nombreproducto" value="{{$product->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="caracteristica">Agregar novedad</label>
        <input name="caracteristica" id="caracteristica" value="{{$product->caracteristica}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cantidad">Agregar Cantidad</label>
        <input name="cantidad" id="cantidad" value="{{$product->cantidad}}" type="text" class="form-control">
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

//Queda pendiente la parte de UPDATE en el FaltantesController//



