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
            'Electrónica', //1
            'Moda y Vestimenta', //2
            'Hogar y Cocina',//3
            'Salud y Belleza',//4
            'Deportes y Aire Libre',//5
            'Juguetes y Juegos',//6
            'Automotriz',//7
            'Libros',//8
            'Música',//9
            'Herramientas y Mejoras del Hogar',//10
            'Jardín y Exteriores',//11
            'Mascotas',//12
            'Alimentos y Bebidas',//13
            'Oficina y Papelería',//14
            'Arte y Manualidades',//15
            'Instrumentos Musicales',//16
            'Tecnologia',//17
            'Relojes y Joyería',//18
            'Calzado',//19
            'Accesorios',//20
            'Fotografía y Video',//21
            'Productos de Limpieza',//22
            'Viajes y Equipaje',//23
        ];
    
        foreach ($categories as $category) {
            Category::create([
                'name' => $category
            ]);
        }
    }

   
}
