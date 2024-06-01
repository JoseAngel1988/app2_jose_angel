@extends('layouts.app')

@section('titulo','ingresar producto')
<br>
@section('contenido')

<br>
<br>
<h3>Ingresar producto a inventario</h3>
<br>
<form action= "/productos" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="nombre" class="form-label">Nombre del producto</label>
      <input type="text" class="form-control" id="nombreproducto" name="nombre">
      <div id="emailHelp" class="form-text">Te recomendamos revisar en stock</div>
    </div>
    <div class="mb-3">
      <label for="caracteristica" class="form-label">Caracteristicas</label>
      <input type="text" class="form-control" id="caracteristicas" name="caracteristica">
    </div>
    <div class="form-group">
        <label for="imagen">Cargar imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-warning">Ir a inventario</button>
  </form>


@endsection

