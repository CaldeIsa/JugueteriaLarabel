@extends('layout')

@section('contenido')
<h1 class="mb-4">Categorías</h1>

<div class="list-group">
    @foreach($categorias as $categoria)
        <a href="{{ route('productos.index', ['categoria' => $categoria->id]) }}" class="list-group-item list-group-item-action">
            {{ $categoria->nombre }}
        </a>
    @endforeach
</div>

<div class="mt-3">
    {{ $categorias->links() }}
</div>
@endsection
