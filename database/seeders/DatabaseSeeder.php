<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Agregado;
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
            "name" => "Administrador",
            "email" => "carlos@test.com",
            "password" => bcrypt("laclasicaburgersafepassword"),
            "tipo" => "Administrador"
        ]);

        Categoria::factory()->times(1)->create([
            "nombre" => "Hamburguesas"
        ]);
        Categoria::factory()->times(1)->create([
            "nombre" => "Alitas y Boneless"
        ]);
        Categoria::factory()->times(1)->create([
            "nombre" => "Ensaladas"
        ]);
        Categoria::factory()->times(1)->create([
            "nombre" => "Papas"
        ]);
        Categoria::factory()->times(1)->create([
            "nombre" => "Bebidas"
        ]);
        Categoria::factory()->times(1)->create([
            "nombre" => "Extras"
        ]);

        Producto::factory()->times(20)->create();

        Agregado::factory()->times(1)->create([
            "nombre" => "Low-Carb"
        ]);
        Agregado::factory()->times(1)->create([
            "nombre" => "Vegetariano"
        ]);
        Agregado::factory()->times(1)->create([
            "nombre" => "Deluxe"
        ]);
        Agregado::factory()->times(1)->create([
            "nombre" => "Sin Gluten"
        ]);
    }
}
