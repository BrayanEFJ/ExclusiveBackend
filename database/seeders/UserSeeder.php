<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan Pérez',
            'email' => 'juan.perez@example.com',
            'address'=>'carrera 123',
            'password_hash' => Hash::make('password123'),
        ]);
        
        User::create([
            'name' => 'María López',
            'email' => 'maria.lopez@example.com',
            'address'=>'calle 456',
            'password_hash' => Hash::make('securepass'),
        ]);
        
        User::create([
            'name' => 'Carlos Rodríguez',
            'email' => 'carlos.rodriguez@example.com',
            'address'=>'Edificio 789 marsella',
            'password_hash' => Hash::make('mysecret'),
        ]);
        
        User::create([
            'name' => 'Ana Gómez',
            'email' => 'ana.gomez@example.com',
            'address'=>'cra 101 con 10',
            'password_hash' => Hash::make('anapass'),
        ]);
        
        User::create([
            'name' => 'Luis Fernández',
            'email' => 'luis.fernandez@example.com',
            'address'=>'calle 11 con 22',
            'password_hash' => Hash::make('luissecure'),
        ]);
    }
}
