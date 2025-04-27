@extends('layout')

@section('contenido')
<div class="text-center">
    <h1 class="mb-4">{{ $producto->nombre }}</h1>

    @if($producto->imagen)
        <img src="{{ $producto->imagen }}" class="img-fluid mb-4" style="max-height: 400px; object-fit: cover;">
    @endif

    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ number_format($producto->precio) }}</p>
    <p><strong>Marca:</strong> {{ $producto->marca }}</p>
    <p><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>

    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>

    <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</div>
@endsection
