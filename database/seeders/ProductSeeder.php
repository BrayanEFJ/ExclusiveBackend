<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Smartphone X1',
            'description' => 'Un smartphone de última generación con pantalla AMOLED.',
            'price' => 599.99,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Laptop Pro',
            'description' => 'Laptop potente con procesador Intel i7 y 16GB de RAM.',
            'price' => 1299.99,
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Bolso Lv',
            'description' => 'Bolso de mano de la marca luois vuitton',
            'price' => 399.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Libro cien años de soledad',
            'description' => 'Libro escrito por Gabriel García Márquez en 1967 y considerado una obra maestra de la literatura hispanoamericana.',
            'price' => 19.99,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Toro Mecánico',
            'description' => 'Teclado mecánico RGB con Compartimentos y decoraciones azules.',
            'price' => 239.99,
            'stock' => 75,
        ]);

        Product::create([
            'name' => 'Mouse Gamer',
            'description' => 'Mouse ergonómico con sensor óptico de alta precisión.',
            'price' => 9.99,
            'stock' => 60,
        ]);

        Product::create([
            'name' => 'Silla Hogar',
            'description' => 'Silla ergonómica con soporte lumbar y reclinable.',
            'price' => 99.99,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Cadena suave canina',
            'description' => 'Cadena suave para perros de tamaño mediano.',
            'price' => 2.99,
            'stock' => 40,
        ]);

        Product::create([
            'name' => 'Oreo Golden Vainilla',
            'description' => 'Edición especial de galletas Oreo con relleno de vainilla.',
            'price' => 2.99,
            'stock' => 70,
        ]);

        Product::create([
            'name' => 'Cámara Cannon',
            'description' => 'Cámara IP con visión nocturna y detección de movimiento.',
            'price' => 89.99,
            'stock' => 90,
        ]);

        Product::create([
            'name' => 'Nomo decorativo',
            'description' => 'Nomo decorativo de jardín con diseño de duende.',
            'price' => 1.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Zapatos deportivos',
            'description' => 'Zapatos deportivos para correr con suela de goma.',
            'price' => 10.99,
            'stock' => 35,
        ]);

        Product::create([
            'name' => 'Maletero de viaje',
            'description' => 'Maletero de viaje con ruedas y cierre seguro.',
            'price' => 35.99,
            'stock' => 40,
        ]);

        Product::create([
            'name' => 'Motor de lavadora',
            'description' => 'Motor de lavadora de 1/2 HP con 6 velocidades.',
            'price' => 79.99,
            'stock' => 5,
        ]);

        Product::create([
            'name' => 'Impresora Multifunción',
            'description' => 'Impresora láser con escáner y WiFi.',
            'price' => 249.99,
            'stock' => 30,
        ]);

        Product::create([
            'name' => 'Televisor 55" 4K',
            'description' => 'Smart TV de 55 pulgadas con resolución 4K UHD y HDR.',
            'price' => 699.99,
            'stock' => 40,
        ]);

        Product::create([
            'name' => 'Zapatillas Running',
            'description' => 'Zapatillas deportivas para running con amortiguación avanzada.',
            'price' => 129.99,
            'stock' => 60,
        ]);

        Product::create([
            'name' => 'Set de Ollas de Acero',
            'description' => 'Juego de 5 ollas de acero inoxidable con tapas de vidrio.',
            'price' => 149.99,
            'stock' => 35,
        ]);

        Product::create([
            'name' => 'Perfume Elegance',
            'description' => 'Perfume de 100ml con aroma floral y notas de vainilla.',
            'price' => 89.99,
            'stock' => 80,
        ]);

        Product::create([
            'name' => 'Bicicleta de Montaña',
            'description' => 'Bicicleta con suspensión delantera y marco de aluminio.',
            'price' => 499.99,
            'stock' => 20,
        ]);

        Product::create([
            'name' => 'Juego de Mesa Monopoly',
            'description' => 'Versión clásica del popular juego de mesa Monopoly.',
            'price' => 29.99,
            'stock' => 50,
        ]);

        Product::create([
            'name' => 'Aceite para Motor',
            'description' => 'Aceite sintético para motores de alto rendimiento.',
            'price' => 39.99,
            'stock' => 100,
        ]);

        Product::create([
            'name' => 'Novela Best Seller',
            'description' => 'Novela de ficción ganadora de premios literarios.',
            'price' => 24.99,
            'stock' => 90,
        ]);

        Product::create([
            'name' => 'Guitarra Acústica',
            'description' => 'Guitarra acústica de madera con cuerdas de nylon.',
            'price' => 199.99,
            'stock' => 15,
        ]);

        Product::create([
            'name' => 'Taladro Inalámbrico',
            'description' => 'Taladro con batería recargable y set de brocas.',
            'price' => 89.99,
            'stock' => 70,
        ]);

        Product::create([
            'name' => 'Set de Jardinería',
            'description' => 'Kit con herramientas esenciales para el jardín.',
            'price' => 49.99,
            'stock' => 40,
        ]);

        Product::create([
            'name' => 'Comida para Perros 10kg',
            'description' => 'Alimento balanceado para perros adultos.',
            'price' => 39.99,
            'stock' => 120,
        ]);

        Product::create([
            'name' => 'Café Molido Premium',
            'description' => 'Café 100% arábica en paquete de 500g.',
            'price' => 14.99,
            'stock' => 200,
        ]);

        Product::create([
            'name' => 'Silla de Oficina Ergonómica',
            'description' => 'Silla ajustable con soporte lumbar.',
            'price' => 199.99,
            'stock' => 25,
        ]);

        Product::create([
            'name' => 'Set de Pintura Acrílica',
            'description' => 'Juego de 24 colores con pinceles incluidos.',
            'price' => 34.99,
            'stock' => 60,
        ]);


        Product::create([
            'name' => 'Smartphone X',
            'description' => 'Teléfono inteligente de última generación.',
            'price' => 999.99,
            'stock' => 50
        ]);


        Product::create([
            'name' => 'Chaqueta de cuero', 'description' => 'Chaqueta elegante de cuero genuino.', 'price' => 120.00, 'stock' => 30]);
        Product::create([
            'name' => 'Set de ollas de acero', 'description' => 'Juego de ollas de acero inoxidable.', 'price' => 85.00, 'stock' => 40]);
        Product::create([
            'name' => 'Crema hidratante facial', 'description' => 'Hidratante con ingredientes naturales.', 'price' => 25.99, 'stock' => 100]);
        Product::create([
            'name' => 'Bicicleta de montaña', 'description' => 'Bicicleta todo terreno de 21 velocidades.', 'price' => 450.00, 'stock' => 15]);
        Product::create([
            'name' => 'Set de bloques de construcción', 'description' => 'Juguete educativo para niños.', 'price' => 39.99, 'stock' => 60]);
        Product::create([
            'name' => 'Llantas deportivas', 'description' => 'Llantas de alto rendimiento para autos.', 'price' => 250.00, 'stock' => 20]);
        Product::create(['name' => 'Libro de ciencia ficción', 'description' => 'Novela de aventuras en el espacio.', 'price' => 18.99, 'stock' => 80]);
        Product::create(['name' => 'Guitarra eléctrica', 'description' => 'Guitarra con diseño moderno y excelente sonido.', 'price' => 699.99, 'stock' => 10]);
        Product::create(['name' => 'Taladro inalámbrico', 'description' => 'Taladro de batería recargable.', 'price' => 79.99, 'stock' => 35]);
        Product::create(['name' => 'Set de jardinería', 'description' => 'Herramientas esenciales para jardinería.', 'price' => 49.99, 'stock' => 45]);
        Product::create(['name' => 'Comida para perros', 'description' => 'Alimento balanceado para perros adultos.', 'price' => 29.99, 'stock' => 70]);
        Product::create(['name' => 'Caja de chocolates gourmet', 'description' => 'Variedad de chocolates finos.', 'price' => 22.50, 'stock' => 90]);
        Product::create(['name' => 'Agenda ejecutiva', 'description' => 'Cuaderno con diseño elegante.', 'price' => 14.99, 'stock' => 120]);
        Product::create(['name' => 'Pinturas acrílicas', 'description' => 'Set de pinturas para artistas.', 'price' => 35.00, 'stock' => 55]);
        Product::create(['name' => 'Teclado MIDI', 'description' => 'Controlador MIDI para producción musical.', 'price' => 199.99, 'stock' => 25]);
        Product::create(['name' => 'Laptop gamer', 'description' => 'Computadora portátil con alto rendimiento.', 'price' => 1299.99, 'stock' => 8]);
        Product::create(['name' => 'Reloj de lujo', 'description' => 'Reloj con correa de cuero y diseño clásico.', 'price' => 349.99, 'stock' => 15]);
        Product::create(['name' => 'Zapatillas deportivas', 'description' => 'Zapatillas cómodas para correr.', 'price' => 89.99, 'stock' => 50]);
        Product::create(['name' => 'Gafas de sol', 'description' => 'Lentes de sol con protección UV.', 'price' => 45.00, 'stock' => 65]);
        Product::create(['name' => 'Cámara profesional', 'description' => 'Cámara réflex digital para fotografía.', 'price' => 1999.99, 'stock' => 5]);
        Product::create(['name' => 'Detergente ecológico', 'description' => 'Detergente biodegradable para ropa.', 'price' => 12.99, 'stock' => 80]);
        Product::create(['name' => 'Maleta de viaje', 'description' => 'Maleta rígida con ruedas giratorias.', 'price' => 99.99, 'stock' => 40]);
        Product::create(['name' => 'Auriculares Bluetooth', 'description' => 'Auriculares inalámbricos con sonido HD.', 'price' => 79.99, 'stock' => 30]);
        Product::create(['name' => 'Pantalón de mezclilla', 'description' => 'Jeans ajustados de alta calidad.', 'price' => 49.99, 'stock' => 60]);
        Product::create(['name' => 'Microondas digital', 'description' => 'Microondas con funciones avanzadas.', 'price' => 199.99, 'stock' => 20]);
        Product::create(['name' => 'Set de brochas de maquillaje', 'description' => 'Brochas profesionales para maquillaje.', 'price' => 29.99, 'stock' => 70]);
        Product::create(['name' => 'Patineta profesional', 'description' => 'Patineta para skateboarding.', 'price' => 129.99, 'stock' => 25]);
        Product::create(['name' => 'Muñeca coleccionable', 'description' => 'Muñeca con accesorios intercambiables.', 'price' => 59.99, 'stock' => 50]);
        Product::create(['name' => 'Aceite para motor', 'description' => 'Lubricante de alto rendimiento.', 'price' => 39.99, 'stock' => 40]);
    }
}
