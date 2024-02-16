<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;
use Faker\Factory as Faker;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        
        for($i=0;$i<10;$i++){
            $usuario = new Usuario();
            $usuario->name = $faker->firstName;
            $usuario->email = $faker->email;
            $usuario->created_at= date('Y-m-d H:m:s');
            $usuario->updated_at = date('Y-m-d H:m:s');
            $usuario->save();
        }
        
    }
}
