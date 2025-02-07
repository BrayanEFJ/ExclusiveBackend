<?php

namespace Database\Seeders;

use App\Models\Product_category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_category::create([
            'product_id' => 1,
            'category_id' => 17,
        ]);

        Product_category::create([
            'product_id' => 2,
            'category_id' => 17,
        ]);
        Product_category::create([
            'product_id' => 3,
            'category_id' => 2,
        ]);
        Product_category::create([
            'product_id' => 4,
            'category_id' => 8,
        ]);
        Product_category::create([
            'product_id' => 5,
            'category_id' => 6,
        ]);
        Product_category::create([
            'product_id' => 6,
            'category_id' => 17,
        ]);

        Product_category::create([
            'product_id' => 7,
            'category_id' => 3,
        ]);

        Product_category::create([
            'product_id' => 8,
            'category_id' => 12,
        ]);
        Product_category::create([
            'product_id' => 9,
            'category_id' => 13,
        ]);
        Product_category::create([
            'product_id' => 10,
            'category_id' => 21,
        ]);
        Product_category::create([
            'product_id' => 11,
            'category_id' => 11,
        ]);
        Product_category::create([
            'product_id' => 12,
            'category_id' => 19,
        ]);
        Product_category::create([
            'product_id' => 13,
            'category_id' => 23,
        ]);
        Product_category::create([
            'product_id' => 13,
            'category_id' => 3,
        ]);
        Product_category::create([
            'product_id' => 14,
            'category_id' => 7,
        ]);
        Product_category::create([
            'product_id' => 15,
            'category_id' => 14,
        ]);
        Product_category::create([
            'product_id' => 15,
            'category_id' => 17,
        ]);

        Product_category::create(['product_id' => 16, 'category_id' => 1]);
        Product_category::create(['product_id' => 17, 'category_id' => 19]);
        Product_category::create(['product_id' => 18, 'category_id' => 3]);
        Product_category::create(['product_id' => 19, 'category_id' => 4]);
        Product_category::create(['product_id' => 20, 'category_id' => 5]);
        Product_category::create(['product_id' => 21, 'category_id' => 6]);
        Product_category::create(['product_id' => 22, 'category_id' => 7]);
        Product_category::create(['product_id' => 23, 'category_id' => 8]);
        Product_category::create(['product_id' => 24, 'category_id' => 16]);
        Product_category::create(['product_id' => 25, 'category_id' => 10]);
        Product_category::create(['product_id' => 26, 'category_id' => 11]);
        Product_category::create(['product_id' => 27, 'category_id' => 12]);
        Product_category::create(['product_id' => 28, 'category_id' => 13]);
        Product_category::create(['product_id' => 29, 'category_id' => 14]);
        Product_category::create(['product_id' => 30, 'category_id' => 15]);
        Product_category::create(['product_id' => 31, 'category_id' => 1]); // Smartphone X - Electrónica
        Product_category::create(['product_id' => 32, 'category_id' => 2]); // Chaqueta de cuero - Moda y Vestimenta
        Product_category::create(['product_id' => 33, 'category_id' => 3]); // Set de ollas de acero - Hogar y Cocina
        Product_category::create(['product_id' => 34, 'category_id' => 4]); // Crema hidratante facial - Salud y Belleza
        Product_category::create(['product_id' => 35, 'category_id' => 5]); // Bicicleta de montaña - Deportes y Aire Libre
        Product_category::create(['product_id' => 36, 'category_id' => 6]); // Set de bloques de construcción - Juguetes y Juegos
        Product_category::create(['product_id' => 37, 'category_id' => 7]); // Llantas deportivas - Automotriz
        Product_category::create(['product_id' => 38, 'category_id' => 8]); // Libro de ciencia ficción - Libros
        Product_category::create(['product_id' => 39, 'category_id' => 16]); // Guitarra eléctrica - Instrumentos Musicales
        Product_category::create(['product_id' => 40, 'category_id' => 10]); // Taladro inalámbrico - Herramientas y Mejoras del Hogar
        Product_category::create(['product_id' => 41, 'category_id' => 11]); // Set de jardinería - Jardín y Exteriores
        Product_category::create(['product_id' => 42, 'category_id' => 12]); // Comida para perros - Mascotas
        Product_category::create(['product_id' => 43, 'category_id' => 13]); // Caja de chocolates gourmet - Alimentos y Bebidas
        Product_category::create(['product_id' => 44, 'category_id' => 14]); // Agenda ejecutiva - Oficina y Papelería
        Product_category::create(['product_id' => 45, 'category_id' => 15]); // Pinturas acrílicas - Arte y Manualidades
        Product_category::create(['product_id' => 46, 'category_id' => 16]); // Teclado MIDI - Instrumentos Musicales
        Product_category::create(['product_id' => 47, 'category_id' => 1]); // Laptop gamer - Electrónica
        Product_category::create(['product_id' => 48, 'category_id' => 18]); // Reloj de lujo - Relojes y Joyería
        Product_category::create(['product_id' => 49, 'category_id' => 19]); // Zapatillas deportivas - Calzado
        Product_category::create(['product_id' => 50, 'category_id' => 20]); // Gafas de sol - Accesorios
        Product_category::create(['product_id' => 51, 'category_id' => 21]); // Cámara profesional - Fotografía y Video
        Product_category::create(['product_id' => 52, 'category_id' => 22]); // Detergente ecológico - Productos de Limpieza
        Product_category::create(['product_id' => 53, 'category_id' => 23]); // Maleta de viaje - Viajes y Equipaje
        Product_category::create(['product_id' => 54, 'category_id' => 1]); // Auriculares Bluetooth - Electrónica
        Product_category::create(['product_id' => 55, 'category_id' => 2]); // Pantalón de mezclilla - Moda y Vestimenta
        Product_category::create(['product_id' => 56, 'category_id' => 3]); // Microondas digital - Hogar y Cocina
        Product_category::create(['product_id' => 57, 'category_id' => 4]); // Set de brochas de maquillaje - Salud y Belleza
        Product_category::create(['product_id' => 58, 'category_id' => 5]); // Patineta profesional - Deportes y Aire Libre
        Product_category::create(['product_id' => 59, 'category_id' => 6]); // Muñeca coleccionable - Juguetes y Juegos
        Product_category::create(['product_id' => 60, 'category_id' => 7]); // Aceite para motor - Automotriz


    }
}
