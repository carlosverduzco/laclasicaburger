<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->times(1)->create([
            "name" => "Carlos Verduzco",
            "email" => "carlos.verduzco7449@alumnos.udg.mx",
            "password" => bcrypt("password")
        ]);
        Producto::factory()->times(40)->create();
    }
}
