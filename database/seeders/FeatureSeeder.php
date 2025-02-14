<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Feature::create([
            'name' => 'Pantalla', //1
            'description' => 'Tamaño y tipo de pantalla del dispositivo.'
        ]);
        
        Feature::create([
            'name' => 'Procesador',//2
            'description' => 'Unidad central de procesamiento del dispositivo.'
        ]);
        
        Feature::create([
            'name' => 'Memoria RAM',//3
            'description' => 'Capacidad de la memoria RAM para procesamiento.'
        ]);
        
        Feature::create([
            'name' => 'Almacenamiento',//4
            'description' => 'Capacidad de almacenamiento interno del dispositivo.'
        ]);
        
        Feature::create([
            'name' => 'Conectividad',//5
            'description' => 'Opciones de conexión como WiFi, Bluetooth, etc.'
        ]);
        
        Feature::create([
            'name' => 'Batería',//6
            'description' => 'Capacidad de la batería y duración estimada.'
        ]);
        
        Feature::create([
            'name' => 'Cámara',//7
            'description' => 'Resolución y características de la cámara integrada.'
        ]);
        
        Feature::create([
            'name' => 'Teclado',//8
            'description' => 'Tipo de teclado y tecnología de retroiluminación.'
        ]);
        
        Feature::create([
            'name' => 'Sensor óptico',//9
            'description' => 'Precisión y velocidad del sensor óptico en dispositivos como mouse.'
        ]);
        
        Feature::create([
            'name' => 'Material',//10
            'description' => 'Materiales utilizados en la fabricación del producto.'
        ]);
        
        Feature::create([
            'name' => 'Ergonomía',//11
            'description' => 'Diseño enfocado en la comodidad del usuario.'
        ]);
        
        Feature::create([
            'name' => 'Tamaño',//12
            'description' => 'Dimensiones físicas del producto.'
        ]);
        
        Feature::create([
            'name' => 'Peso',//13
            'description' => 'Peso total del producto en uso.'
        ]);
        
        Feature::create([
            'name' => 'Compatibilidad',//14
            'description' => 'Compatibilidad con otros dispositivos y sistemas.'
        ]);
        
        Feature::create([
            'name' => 'Tipo de motor',//15
            'description' => 'Especificaciones del motor en productos mecánicos.'
        ]);
        
        Feature::create([
            'name' => 'Tipo de impresión',//16
            'description' => 'Tecnología de impresión utilizada en impresoras.'
        ]);
        
        Feature::create([
            'name' => 'Suspensión',//17
            'description' => 'Sistema de suspensión en vehículos y bicicletas.'
        ]);
        
        Feature::create([
            'name' => 'Capacidad',//18
            'description' => 'Capacidad total del producto, como volumen o carga máxima.'
        ]);
        
        Feature::create([
            'name' => 'Tipo de fragancia',//19
            'description' => 'Notas aromáticas principales en perfumes y cosméticos.'
        ]);
        
        Feature::create([
            'name' => 'Iluminación',//20
            'description' => 'Sistema de iluminación en productos electrónicos.'
        ]);
        
        Feature::create([
            'name' => 'Protección',//21
            'description' => 'Medidas de seguridad incorporadas en el producto.'
        ]);
        
        Feature::create([
            'name' => 'Tipo de suela',//22
            'description' => 'Material y diseño de la suela en calzado deportivo.'
        ]);
        
        Feature::create([
            'name' => 'Ingredientes',//23
            'description' => 'Composición de productos alimenticios o cosméticos.'
        ]);
        
        Feature::create([
            'name' => 'Resistencia al agua',//24
            'description' => 'Nivel de protección contra el agua y humedad.'
        ]);
        
        Feature::create([
            'name' => 'Accesorios incluidos',//25
            'description' => 'Elementos adicionales que vienen con el producto.'
        ]);
        
    }
}
