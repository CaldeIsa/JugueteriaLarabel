@extends('layout')

@section('contenido')
<h1 class="mb-4">Agregar Producto</h1>

<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea id="descripcion" name="descripcion" class="form-control" placeholder="Descripción" required></textarea>
    </div>
    <div class="mb-3">
        <label for="precio" class="form-label">Precio</label>
        <input type="text" step="0.01" id="precio" name="precio" class="form-control" placeholder="Precio" required>
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <input type="text" id="marca" name="marca" class="form-control" placeholder="Marca" required>
    </div>
    <div class="mb-3">
        <label for="categoria_id" class="form-label">Categoría</label>
        <select id="categoria_id" name="categoria_id" class="form-control" required>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
