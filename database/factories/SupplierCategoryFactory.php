<?php

use Faker\Generator as Faker;
$factory->define(App\SupplierCategory::class, function (Faker $faker) {
    return [
       'title' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->name,
    ];
});