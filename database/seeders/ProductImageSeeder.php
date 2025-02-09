<?php

namespace Database\Seeders;

use App\Models\Product_image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductimageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product_image::create([
            'product_id' => 1,
            'image_url' => 'https://1589077843.rsc.cdn77.org/temp/1605715657_73eb50f41718a6bcc810b0421e63fa04.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Smartphone X1',
        ]);

        Product_image::create([
            'product_id' => 2,
            'image_url' => 'https://lasus.com.co/131422-large_default/802b4laabm-14-dq0520la-cel-8-256-14-lin.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Laptop Pro',
        ]);

        Product_image::create([
            'product_id' => 3,
            'image_url' => 'https://media.gotrendier.com.co/media/p/2022/11/03/n_51fd5322-5bf5-11ed-9281-026484b5164f.jpeg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Bolso Lv',
        ]);

        Product_image::create([
            'product_id' => 4,
            'image_url' => 'https://www.alianzalibros.com/wp-content/uploads/2024/11/cien-anos-de-soledad.webp',
            'is_main'=>true,
            'alt_text' => 'Portada del libro Cien Años de Soledad',
        ]);

        Product_image::create([
            'product_id' => 5,
            'image_url' => 'https://abracadabra.cl/wp-content/uploads/2023/07/arriendo-toro-mecanico.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Teclado Mecánico Toro Mecánico',
        ]);

        Product_image::create([
            'product_id' => 6,
            'image_url' => 'https://www.steren.com.co/media/catalog/product/cache/0236bbabe616ddcff749ccbc14f38bf2/image/22331c7bc/mouse-usb-para-gamers-1200-2400-3200-dpi.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Mouse Gamer',
        ]);

        Product_image::create([
            'product_id' => 7,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-6CHExZFkTgM_TedwKVn42S97r5NEZtrw0w&s',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Silla Hogar',
        ]);

        Product_image::create([
            'product_id' => 8,
            'image_url' => 'https://m.media-amazon.com/images/I/61tE-eWnYRL._AC_SL1000_.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Cadena Suave Canina',
        ]);

        Product_image::create([
            'product_id' => 9,
            'image_url' => 'https://lh3.googleusercontent.com/PMZprkR6Fhxl56YDlLdJQzeJxlGKY1KJso9mO9DwxXTDM3wYg_m8RIuUmD9Ewg2RA56rPU6vqun_ZgaR3hfE2ZqYKxwYatmPGUK_',
            'is_main'=>true,
            'alt_text' => 'Imagen de las Galletas Oreo Golden Vainilla',
        ]);

        Product_image::create([
            'product_id' => 10,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsQw3vi8j0wa6eLmf74VTlXkN5lrTny7P7Vw&s',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Cámara Cannon',
        ]);

        Product_image::create([
            'product_id' => 11,
            'image_url' => 'https://admin.burica.com.co/backend/admin/backend/web/archivosDelCliente/items/images/Navidad-Munequeria-GNOMO-16X12X32CM-ROJOGRIS-971220230906160801.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Nomo Decorativo',
        ]);

        Product_image::create([
            'product_id' => 12,
            'image_url' => 'https://dikass.com/cdn/shop/files/WhatsApp_Image_2024-04-01_at_4.17.39_PM.jpg?v=1712009614&width=1445.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen de los Zapatos Deportivos',
        ]);

        Product_image::create([
            'product_id' => 13,
            'image_url' => 'https://bincolombiasas.com/cdn/shop/files/1aed9e41-167d-462d-bdb9-18796032be81-rjjjtzk.jpg?v=1736445279&width=533',
            'is_main'=>true,
            'alt_text' => 'Imagen del Maletero de Viaje',
        ]);

        Product_image::create([
            'product_id' => 14,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_993451-MCO49942339092_052022-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Motor de Lavadora',
        ]);

        Product_image::create([
            'product_id' => 15,
            'image_url' => 'https://cdn1.totalcommerce.cloud/linalca/product-image/es/impresora-multifuncional-epson-ecotank-l5590-color-negro-1.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Impresora Multifunción',
        ]);

        Product_image::create([
            'product_id' => 16,
            'image_url' => 'https://compucentro.co/wp-content/uploads/2-11-1.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Televisor 55" 4K',
        ]);

        Product_image::create([
            'product_id' => 17,
            'image_url' => 'https://reebokcol.vtexassets.com/arquivos/ids/884369/100204835_1.jpg?v=638569566576000000',
            'is_main'=>true,
            'alt_text' => 'Imagen de las Zapatillas Running',
        ]);

        Product_image::create([
            'product_id' => 18,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYnLPtN9nsXM4iCKIzhv2GK7x8OGV4WMFUgQ&s',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Ollas de Acero',
        ]);

        Product_image::create([
            'product_id' => 19,
            'image_url' => 'https://m.media-amazon.com/images/I/219IOEhzMUL._AC_UF894,1000_QL80_.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Perfume Elegance',
        ]);

        Product_image::create([
            'product_id' => 20,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPcVYPn6ctGu7E3UEJCb5ZMHWYtSJu_7OG-Q&s.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Bicicleta de Montaña',
        ]);

        Product_image::create([
            'product_id' => 21,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_6wTPwuOQvs5WYtM__fy_Mf1ErcJfh407mQ&s',
            'is_main'=>true,
            'alt_text' => 'Imagen del Juego de Mesa Monopoly',
        ]);

        Product_image::create([
            'product_id' => 22,
            'image_url' => 'https://auteco.vtexassets.com/arquivos/ids/216324-800-800?v=637892791857130000&width=800&height=800&aspect=true',
            'is_main'=>true,
            'alt_text' => 'Imagen del Aceite para Motor',
        ]);

        Product_image::create([
            'product_id' => 23,
            'image_url' => 'https://media.revistagq.com/photos/5ca5e8210a5ae6eb952a1bd9/master/w_320%2Cc_limit/los_25_best_sellers_que_tendrias_que_leer_antes_de_morir_788067039.jpg',
            'is_main'=>true,
            'alt_text' => 'Portada de la Novela Best Seller',
        ]);

        Product_image::create([
            'product_id' => 24,
            'image_url' => 'https://ortizo.com.co/cdn/shop/products/GA0690-01_70ccceb8-030b-4217-9ba4-d5e50f5855c3_960x.png?v=1735322924',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Guitarra Acústica',
        ]);

        Product_image::create([
            'product_id' => 25,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuG87u_oU2c-hLk407kl5DF93DTLr_CU_OJg&s',
            'is_main'=>true,
            'alt_text' => 'Imagen del Taladro Inalámbrico',
        ]);

        Product_image::create([
            'product_id' => 26,
            'image_url' => 'https://publicitar.com.co/wp-content/uploads/2023/12/KIT-JARDINERIA.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Jardinería',
        ]);

        Product_image::create([
            'product_id' => 27,
            'image_url' => 'https://easycolombia.vtexassets.com/arquivos/ids/170083-800-800?v=638066271882170000&width=800&height=800&aspect=true',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Comida para Perros 10kg',
        ]);

        Product_image::create([
            'product_id' => 28,
            'image_url' => 'https://olimpica.vtexassets.com/arquivos/ids/1238980/image-ce10b1f820b84681acd58936cd28a3a8.jpg?v=638366928849400000',
            'is_main'=>true,
            'alt_text' => 'Imagen del Colchón Queen Size',
        ]);

        Product_image::create([
            'product_id' => 29,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_723810-MCO47955060389_102021-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Lámpara LED',
        ]);

        Product_image::create([
            'product_id' => 30,
            'image_url' => 'https://m.media-amazon.com/images/I/516JzIZxHNL._AC_SL1000_.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Maletín de Negocios',
        ]);

        Product_image::create([
            'product_id' => 31,
            'image_url' => 'https://panamericana.vtexassets.com/arquivos/ids/493040/audifonos-azules-inalambricos-tipo-diadema-sony-wh-ch520-3-27242925472.jpg?v=638187164966730000',
            'is_main'=>true,
            'alt_text' => 'Imagen de los Audífonos Inalámbricos',
        ]);

        Product_image::create([
            'product_id' => 32,
            'image_url' => 'https://tommycolombia.vteximg.com.br/arquivos/ids/1128674-500-667/mw0mw18763-dw5-1-v-637668194667470000-category-product-version-image.jpg?v=638726498093930000',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Chaqueta de Invierno',
        ]);

        Product_image::create([
            'product_id' => 33,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_772171-MLA47425763143_092021-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Microondas Digital',
        ]);

        Product_image::create([
            'product_id' => 34,
            'image_url' => 'https://www.powerplanetonline.com/cdnassets/blog/mejores-moviles-gaming.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Móvil Gamer',
        ]);

        Product_image::create([
            'product_id' => 35,
            'image_url' => 'https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaCO/128946130_01/w=800,h=800,fit=pad',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Utensilios de Cocina',
        ]);

        Product_image::create([
            'product_id' => 36,
            'image_url' => 'https://exitocol.vteximg.com.br/arquivos/ids/20817583/Marvel-Spd-Titan-Venom-SPIDERMAN-F4984-3208422_a.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Figura de Acción',
        ]);

        Product_image::create([
            'product_id' => 37,
            'image_url' => 'https://www.fabysport.com/wp-content/uploads/2023/05/camiseta-faby-sport-hombre-negra2-min.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Ropa Deportiva',
        ]);

        Product_image::create([
            'product_id' => 38,
            'image_url' => 'https://www.grupomansion.com/14142-thickbox_default/reloj-inteligente-mobulaa-smartwatch-negro-g-tide-s2-pro.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Smartwatch Pro',
        ]);

        Product_image::create([
            'product_id' => 39,
            'image_url' => 'https://ebani.com.co/cdn/shop/files/Mesa-escritorio-Home-Office-M150-Wengue-Conac-Ebani-Colombia-tienda-online-de-decoracion-y-mobiliario-RTA-2-scaled.jpg?v=1696902080',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Mesa de Escritorio',
        ]);

        Product_image::create([
            'product_id' => 40,
            'image_url' => 'https://homesale.com.co/cdn/shop/products/coche-bebe-m1-moises-reversible-multifuncion-plegable-coches-para-bebes-bambino-408565.jpg?v=1702459281',
            'is_main'=>true,
            'alt_text' => 'Imagen del Coche para Bebé',
        ]);

        Product_image::create([
            'product_id' => 41,
            'image_url' => 'https://exitocol.vtexassets.com/arquivos/ids/23235991/maleta-de-mano-para-cabina-viaje-y-ordenador-usb-impermeable-rosa.jpg?v=638544115717500000',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Maleta de Viaje de Cabina',
        ]);

        Product_image::create([
            'product_id' => 42,
            'image_url' => 'https://electroluxco.vtexassets.com/arquivos/ids/162864/Robot_Vacuum_ERB40_ChargingStation_Electrolux_1000x1000.jpg?v=638140836681000000',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Aspiradora Robot',
        ]);

        Product_image::create([
            'product_id' => 43,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_2X_622479-MLU76534266664_052024-T.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Pantalla Gamer 4K',
        ]);

        Product_image::create([
            'product_id' => 44,
            'image_url' => 'https://www.ingcoherramientascolombia.com/cdn/shop/files/HKTHP21421_3c745267-6aad-4533-9d2c-ef2a20b6c789.jpg?v=1734634432&width=1946',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Herramientas',
        ]);

        Product_image::create([
            'product_id' => 45,
            'image_url' => 'https://exitocol.vtexassets.com/arquivos/ids/21125589/CAFETERA-ESPRESSO-OSTER-15B-1625117_b.jpg?v=638415584887100000',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Cafetera Espresso',
        ]);

        Product_image::create([
            'product_id' => 46,
            'image_url' => 'https://www.steren.com.co/media/catalog/product/cache/0236bbabe616ddcff749ccbc14f38bf2/image/20042da3f/soporte-de-escritorio-para-monitores-de-hasta-32.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Soporte para Monitor',
        ]);

        Product_image::create([
            'product_id' => 47,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKYDGg37pGCfeDq2_0if4pam_d_aitLrrxug&s',
            'is_main'=>true,
            'alt_text' => 'Imagen de las Baterías Recargables',
        ]);

        Product_image::create([
            'product_id' => 48,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_846938-MLU73296390408_122023-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Proyector HD',
        ]);

        Product_image::create([
            'product_id' => 49,
            'image_url' => 'https://olimpica.vtexassets.com/arquivos/ids/1396011/4210201445548.jpg?v=638499989843430000',
            'is_main'=>true,
            'alt_text' => 'Imagen del Cepillo Dental Eléctrico',
        ]);

        Product_image::create([
            'product_id' => 50,
            'image_url' => 'https://panamericana.vtexassets.com/arquivos/ids/386051-800-auto?v=637511718754230000&width=800&height=auto&aspect=true',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Pintura Acrílica',
        ]);

        Product_image::create([
            'product_id' => 51,
            'image_url' => 'https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaCO/72843162_1/w=1500,h=1500,fit=pad',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Gorra Deportiva',
        ]);

        Product_image::create([
            'product_id' => 52,
            'image_url' => 'https://hogaruniversal.vtexassets.com/arquivos/ids/167046-800-auto?v=638398224257730000&width=800&height=auto&aspect=true',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Tostadora de Pan',
        ]);

        Product_image::create([
            'product_id' => 53,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_716593-CBT76584070385_052024-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen de la Mochila Escolar',
        ]);

        Product_image::create([
            'product_id' => 54,
            'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRnTHgl-EH_PNCFdNGSnqGGp7oi973pb0MWuw&s',
            'is_main'=>true,
            'alt_text' => 'Imagen del Sofá Moderno',
        ]);

        Product_image::create([
            'product_id' => 55,
            'image_url' => 'https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaCO/127014523_01/w=1500,h=1500,fit=pad',
            'is_main'=>true,
            'alt_text' => 'Imagen del Ventilador Silencioso',
        ]);

        Product_image::create([
            'product_id' => 56,
            'image_url' => 'https://lumen-colombia.com/8207-large_01oslo/maletin-fotografia.jpg',
            'is_main'=>true,
            'alt_text' => 'Imagen del Maletín para Cámara',
        ]);

        Product_image::create([
            'product_id' => 57,
            'image_url' => 'https://copservir.vtexassets.com/arquivos/ids/898627-800-auto?v=638119785438330000&width=800&height=auto&aspect=true',
            'is_main'=>true,
            'alt_text' => 'Imagen del Candado de Seguridad',
        ]);

        Product_image::create([
            'product_id' => 58,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_973961-MCO46093344212_052021-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Organizador de Oficina',
        ]);

        Product_image::create([
            'product_id' => 59,
            'image_url' => 'https://imagedelivery.net/4fYuQyy-r8_rpBpcY7lH_A/falabellaCO/124106392_01/w=1500,h=1500,fit=pad',
            'is_main'=>true,
            'alt_text' => 'Imagen del Kit de Supervivencia',
        ]);

        Product_image::create([
            'product_id' => 60,
            'image_url' => 'https://http2.mlstatic.com/D_NQ_NP_697587-MCO80882714447_112024-O.webp',
            'is_main'=>true,
            'alt_text' => 'Imagen del Set de Maquillaje',
        ]);
    }
}
