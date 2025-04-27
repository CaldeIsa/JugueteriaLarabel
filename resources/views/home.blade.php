@extends('layout')

@section('contenido')

<!-- Carousel de Juguetes -->
<div id="carouselJuguetes" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner rounded shadow">
        <div class="carousel-item active">
            <img src="https://media.timeout.com/images/102982514/1920/1440/image.webp" class="d-block w-100" alt="Juguetes 1" style="max-height: 400px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="https://www.dondeir.com/wp-content/uploads/2018/12/jugueterias-en-ciudad-de-mexico.jpg" class="d-block w-100" alt="Juguetes 2" style="max-height: 400px; object-fit: cover;">
        </div>
        <div class="carousel-item">
            <img src="https://image.nuevayork.com/wp-content/uploads/2021/11/Toy-Stores-in-New-York.jpg.webp" class="d-block w-100" alt="Juguetes 3" style="max-height: 400px; object-fit: cover;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselJuguetes" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselJuguetes" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- Bienvenida -->
<div class="text-center mb-5">
    <h1 class="display-4 fw-bold text-primary">¡Bienvenido a Juguetería Laravel!</h1>
    <p class="lead mt-3 text-secondary">Los juguetes más divertidos para los más pequeños</p>
</div>

<!-- Botones grandes -->
<div class="row justify-content-center">
    <div class="col-md-4 d-flex justify-content-center">
        <a href="{{ route('categorias.index') }}" class="btn btn-primary btn-lg shadow rounded-pill px-5 py-3">🚗 Ver Categorías</a>
    </div>
    <div class="col-md-4 d-flex justify-content-center">
        <a href="{{ route('productos.index') }}" class="btn btn-primary btn-lg shadow rounded-pill px-5 py-3">🧸 Ver Productos</a>
    </div>
</div>

@endsection
