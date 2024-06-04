@extends('layouts.app')

@section('titulo', 'ingresar producto')

@section('contenido')
<br>
<h3 class="text-center">Buscar en inventario</h3>
<br>
<div class="row">
    @foreach ($product as $inventario)
    <div class="col-sm">
        <div class="card" style="width: 18rem;background-color: #418505;">
            <img style="height: 150px; width:200px; margin:10px; " src="{{ Storage::url($inventario->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$inventario->nombre}}</h5>
              <p class="card-text">{{$inventario->caracteristica}}</p>
              <p class="card-text">{{$inventario->cantidad}}</p>
              <a href="/faltantes/{{$inventario->id}}" class="btn btn-warning">Guardar en Stock</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
