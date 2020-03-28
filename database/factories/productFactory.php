<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        "nombre" => $faker->sentence(5),
        "descripcion" =>$faker->sentence(15),
        "precio" => $faker->numberBetween($min = 1000, $max = 9000),
        "stock" =>$faker->randomDigit,
        "id_categoria" =>$faker->numberBetween($min = 1, $max = 10) // 8567,
    ];
});
