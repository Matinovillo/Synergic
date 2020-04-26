<?php

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
        // $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        // //productos factory
        // factory(App\Producto::class,25)->create();
        // factory(App\Producto_foto::class,25)->create();
    }
}
