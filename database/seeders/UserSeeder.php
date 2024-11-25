<?php

namespace Database\Seeders;

use App\Models\User; //se debe especificar el modelo que se usará
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $user1 = new User();
        $user1->name ='Jesus Gamboa';
        $user1->email ='21890238@ittizimin.edu.mx';
        $user1->password =bcrypt('Nuev5831');
        $user1->save();
    }
}