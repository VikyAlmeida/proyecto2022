<?php

namespace Database\Seeders;

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
        User::create([
            "name"=>"Victoria Almeida Calderón",
            "user"=>"Administrador web",
            "email"=>"admin@admin.com",
            "image"=>"user-default.png",
            "password"=>bcrypt("admin12345"),
            "tipo"=>"administrador"
        ]);
    }
}
