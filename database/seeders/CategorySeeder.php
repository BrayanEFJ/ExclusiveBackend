<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        $categories = [
            'Electrónica',
            'Moda y Vestimenta',
            'Hogar y Cocina',
            'Salud y Belleza',
            'Deportes y Aire Libre',
            'Juguetes y Juegos',
            'Automotriz',
            'Libros',
            'Música',
            'Herramientas y Mejoras del Hogar',
            'Jardín y Exteriores',
            'Mascotas',
            'Alimentos y Bebidas',
            'Oficina y Papelería',
            'Arte y Manualidades',
            'Instrumentos Musicales',
            'Tecnologia',
            'Relojes y Joyería',
            'Calzado',
            'Accesorios',
            'Fotografía y Video',
            'Productos de Limpieza',
            'Viajes y Equipaje',
        ];
    
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

   
}
