<?php

namespace Database\Seeders;

use App\Models\Feature_product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Smartphone X1 (id: 1)
         Feature_product::create(['feature_id' => 1, 'product_id' => 1, 'value' => '6.7" AMOLED']);
         Feature_product::create(['feature_id' => 2, 'product_id' => 1, 'value' => 'Snapdragon 8 Gen 2']);
         Feature_product::create(['feature_id' => 3, 'product_id' => 1, 'value' => '8GB']);
         Feature_product::create(['feature_id' => 4, 'product_id' => 1, 'value' => '256GB']);
         Feature_product::create(['feature_id' => 5, 'product_id' => 1, 'value' => '5G, WiFi 6, Bluetooth 5.2']);
         Feature_product::create(['feature_id' => 6, 'product_id' => 1, 'value' => '5000mAh']);
         Feature_product::create(['feature_id' => 7, 'product_id' => 1, 'value' => '108MP + 12MP Ultra Wide']);
         
         // Laptop Pro (id: 2)
         Feature_product::create(['feature_id' => 1, 'product_id' => 2, 'value' => '15.6" IPS Full HD']);
         Feature_product::create(['feature_id' => 2, 'product_id' => 2, 'value' => 'Intel Core i7-12700H']);
         Feature_product::create(['feature_id' => 3, 'product_id' => 2, 'value' => '16GB DDR4']);
         Feature_product::create(['feature_id' => 4, 'product_id' => 2, 'value' => '512GB SSD NVMe']);
         Feature_product::create(['feature_id' => 5, 'product_id' => 2, 'value' => 'WiFi 6, Bluetooth 5.0']);
         Feature_product::create(['feature_id' => 6, 'product_id' => 2, 'value' => '6 celdas 72Wh']);
         
         // Bolso LV (id: 3)
         Feature_product::create(['feature_id' => 10, 'product_id' => 3, 'value' => 'Cuero genuino']);
         Feature_product::create(['feature_id' => 12, 'product_id' => 3, 'value' => '35cm x 25cm x 15cm']);
         Feature_product::create(['feature_id' => 13, 'product_id' => 3, 'value' => '0.8kg']);
         
         // Toro Mecánico (Teclado) (id: 5)
         Feature_product::create(['feature_id' => 8, 'product_id' => 5, 'value' => 'Switches Blue']);
         Feature_product::create(['feature_id' => 20, 'product_id' => 5, 'value' => 'RGB personalizable']);
         Feature_product::create(['feature_id' => 14, 'product_id' => 5, 'value' => 'Windows/Mac OS']);
         
         // Mouse Gamer (id: 6)
         Feature_product::create(['feature_id' => 9, 'product_id' => 6, 'value' => '16000 DPI']);
         Feature_product::create(['feature_id' => 11, 'product_id' => 6, 'value' => 'Diseño ergonómico derecho']);
         Feature_product::create(['feature_id' => 20, 'product_id' => 6, 'value' => 'RGB 16.8M colores']);
         
         // Silla Hogar (id: 7)
         Feature_product::create(['feature_id' => 11, 'product_id' => 7, 'value' => 'Soporte lumbar ajustable']);
         Feature_product::create(['feature_id' => 10, 'product_id' => 7, 'value' => 'Malla transpirable']);
         Feature_product::create(['feature_id' => 18, 'product_id' => 7, 'value' => '120kg máximo']);
         
         // Cámara Cannon (id: 10)
         Feature_product::create(['feature_id' => 7, 'product_id' => 10, 'value' => '1080p Full HD']);
         Feature_product::create(['feature_id' => 5, 'product_id' => 10, 'value' => 'WiFi, Ethernet']);
         Feature_product::create(['feature_id' => 24, 'product_id' => 10, 'value' => 'IP66']);
         
         // Zapatos deportivos (id: 12)
         Feature_product::create(['feature_id' => 22, 'product_id' => 12, 'value' => 'Goma antideslizante']);
         Feature_product::create(['feature_id' => 24, 'product_id' => 12, 'value' => 'Resistente a salpicaduras']);
         
         // Motor de lavadora (id: 14)
         Feature_product::create(['feature_id' => 15, 'product_id' => 14, 'value' => '1/2 HP 6 velocidades']);
         Feature_product::create(['feature_id' => 24, 'product_id' => 14, 'value' => 'IPX4']);
         
         // Impresora Multifunción (id: 15)
         Feature_product::create(['feature_id' => 16, 'product_id' => 15, 'value' => 'Láser monocromático']);
         Feature_product::create(['feature_id' => 5, 'product_id' => 15, 'value' => 'WiFi, USB, Ethernet']);
         Feature_product::create(['feature_id' => 14, 'product_id' => 15, 'value' => 'Windows/Mac OS']);
         
         // Televisor 55" 4K (id: 16)
         Feature_product::create(['feature_id' => 1, 'product_id' => 16, 'value' => '55" LED 4K UHD']);
         Feature_product::create(['feature_id' => 5, 'product_id' => 16, 'value' => 'WiFi, Bluetooth, HDMI']);
         Feature_product::create(['feature_id' => 20, 'product_id' => 16, 'value' => 'HDR10+']);
         
         // Bicicleta de Montaña (id: 20)
         Feature_product::create(['feature_id' => 17, 'product_id' => 20, 'value' => 'Suspensión delantera 100mm']);
         Feature_product::create(['feature_id' => 10, 'product_id' => 20, 'value' => 'Marco de aluminio']);
         Feature_product::create(['feature_id' => 13, 'product_id' => 20, 'value' => '13.5kg']);
         
         // Perfume Elegance (id: 19)
         Feature_product::create(['feature_id' => 19, 'product_id' => 19, 'value' => 'Floral con notas de vainilla']);
         Feature_product::create(['feature_id' => 18, 'product_id' => 19, 'value' => '100ml']);
         
         // Taladro Inalámbrico (id: 25)
         Feature_product::create(['feature_id' => 6, 'product_id' => 25, 'value' => '20V 2000mAh']);
         Feature_product::create(['feature_id' => 25, 'product_id' => 25, 'value' => '23 brocas incluidas']);
         Feature_product::create(['feature_id' => 24, 'product_id' => 25, 'value' => 'IP54']);
    }
}
