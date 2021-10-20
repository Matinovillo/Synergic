<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Producto_foto;
use Faker\Generator as Faker;

$factory->define(App\Producto_foto::class, function (Faker $faker) {
    return [
        "id_producto" => $faker->unique()->numberBetween($min = 1, $max = 25),
        "nombre" => "nT9Ki0F4sxa1lvyBkCkiQ7EjmvYr2qsNMKXWwR7H.jpeg"  
    ];
});
