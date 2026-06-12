<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        Producto::create([
            'nombre'      => 'Teclado mecánico',
            'precio'      => 25000,
            'stock'       => 15,
            'descripcion' => 'Teclado RGB switches azules',
        ]);

        Producto::create([
            'nombre'      => 'Mouse inalámbrico',
            'precio'      => 12500.50,
            'stock'       => 30,
            'descripcion' => null,
        ]);

        Producto::create([
            'nombre'      => 'Monitor 24 pulgadas',
            'precio'      => 89000,
            'stock'       => 8,
            'descripcion' => 'Full HD, 75Hz',
        ]);
    }
}