@extends('layouts.app')

@section('titulo', 'ingresar producto')

@section('contenido')
<br>

<h3 class="text-center">Bodega</h3>

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($product->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">{{$product->caracteristica}}</p>
    </div>
    <div class="card-body">
        <p class="card-text">{{$product->caracteristica}}</p>
    </div>
    <br>
    <a href="/faltantes/{{$product->id}}/edit" class="btn btn-warning">Reemplazar producto</a>
</div>

@endsection
