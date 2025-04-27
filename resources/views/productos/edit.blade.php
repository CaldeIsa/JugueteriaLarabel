@extends('layout')

@section('contenido')
<h1 class="mb-4">Editar Producto</h1>

<form action="{{ route('productos.update', $producto) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" required>
    </div>
    <div class="mb-3">
        <textarea name="descripcion" class="form-control" required>{{ $producto->descripcion }}</textarea>
    </div>
    <div class="mb-3">
        <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" required>
    </div>
    <div class="mb-3">
        <input type="text" name="marca" class="form-control" value="{{ $producto->marca }}" required>
    </div>
    <div class="mb-3">
        <select name="categoria_id" class="form-control" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" @if($producto->categoria_id == $categoria->id) selected @endif>{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endsection
