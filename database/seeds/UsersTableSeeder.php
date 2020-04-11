<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $adminRole = Role::where('nombre','admin')->first();
        $userRole = Role::where('nombre','user')->first();

        $admin = User::create([
            "nombre" => 'Admin User',
            'apellido' => 'Administrador',
            "email" => 'admin@admin.com',
            "fecha_nacimiento" => '2020-04-10',
            "password" => Hash::make('password'),
            "id_sexo" => null,
            "id_foto" => 1,
            "id_domicilio" => null,
            "flag" => "S"
        ]);


        $user = User::create([
            "nombre" => 'Generic User',
            'apellido' => 'Generico',
            "email" => 'user@user.com',
            "fecha_nacimiento" => '2020-04-10',
            "password" => Hash::make('password'),
            "id_sexo" => null,
            "id_foto" => 1,
            "id_domicilio" => null,
            "flag" => "S"
        ]);

        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
    }
}
