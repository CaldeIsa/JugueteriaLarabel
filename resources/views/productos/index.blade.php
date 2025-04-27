@extends('layout')

@section('contenido')
<h1 class="mb-4 text-center">Nuestros Productos</h1>

<form method="GET" action="{{ route('productos.index') }}" class="mb-5 d-flex justify-content-center">
    <input type="text" name="search" class="form-control w-50" placeholder="Buscar productos..." value="{{ request('search') }}">
</form>

<div class="text-center mb-4">
    <a href="{{ route('productos.create') }}" class="btn btn-primary">➕ Agregar Producto</a>
</div>

<div class="row">
    @foreach($productos as $producto)
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm h-100">
            @if($producto->imagen)
                <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}" style="height: 200px; object-fit: cover;">
            @else
                <img src="https://via.placeholder.com/400x200.png?text=Sin+Imagen" class="card-img-top" alt="Sin imagen">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title">{{ $producto->nombre }}</h5>
                <p class="card-text">{{ $producto->precio }}</p>
                <a href="{{ route('productos.show', $producto) }}" class="btn btn-primary btn-sm">Ver más</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-4">
    {{ $productos->links() }}
</div>
@endsection
