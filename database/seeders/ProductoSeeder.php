<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        // Crear algunas categorías de ejemplo
        $categorias = [
            'Muñecas',
            'Carros',
            'Peluches',
            'Juegos de mesa',
            'Construcción',
            'Educativos'
        ];

        foreach ($categorias as $nombreCategoria) {
            Categoria::firstOrCreate(['nombre' => $nombreCategoria]);
        }

        // Leer el CSV de juguetes
        $file = storage_path('app/public/catalogo_jugueteria.csv');

        if (!file_exists($file) || !is_readable($file)) {
            throw new \Exception("No se puede leer el archivo CSV de juguetes.");
        }

        $data = array_map('str_getcsv', file($file));
        $header = array_map('strtolower', array_shift($data)); // primera línea como cabecera

        foreach ($data as $row) {
            $row = array_combine($header, $row);

            Producto::create([
                'nombre' => $row['nombre'],
                'descripcion' => $row['descripcion'] ?? 'Sin descripción',
                'precio' => $row['precio'] ? $row['precio'] : 10.00,
                'marca' => $row['marca'] ?? 'Desconocida',
                'categoria_id' => Categoria::inRandomOrder()->first()->id,
                'imagen' => $row['imagen'] ?? null,
            ]);
        }
    }
}
