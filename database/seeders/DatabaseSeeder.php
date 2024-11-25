<?php

namespace Database\Seeders;

use App\Models\User; //tenga en cuenta agregar el MODELO USER
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
				// con esta línea se llama al factory y se crean 10 registros aleatorios
        User::factory(10)->create();
 
   }
}