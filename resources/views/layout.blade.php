<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juguetería Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
        }
        .navbar {
            background-color: #00BFFF;
        }
        .btn-primary {
            background-color: #FFD700;
            border-color: #FFD700;
            color: #333;
        }
        .btn-primary:hover {
            background-color: #FFC300;
            border-color: #FFC300;
        }
        .card {
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card-title {
            color: #00BFFF;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light mb-4">
    <div class="container-fluid">
        <a class="navbar-brand text-white fw-bold" href="{{ route('productos.index') }}">🧸 Juguetería Laravel</a>
    </div>
</nav>

<div class="container">
    @yield('contenido')
</div>

</body>
</html>
