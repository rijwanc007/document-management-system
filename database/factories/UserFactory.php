<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'employee_pic' => '1547906236.jpg',
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'company' => $faker->company,
        'job_title' => $faker->jobTitle,
        'email' => $faker->unique()->safeEmail,
        'website' => $faker->url,
        'mobile_phone' =>'01986348224',
        'home_phone' => '01986348224',
        'link_profile' => $faker->url,
        'facebook' => $faker->url,
        'sky_id' => $faker->url,
        'password' =>bcrypt(123456),
        'confirm_password' =>'123456',
        'address_location' => $faker->address,
        'address_area_division' =>$faker->city,
        'address_two' =>$faker->address,
        'email_verified_at' => now(),
//        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'notes'=> $faker->paragraph,
        'remember_token' => str_random(10),
    ];
});
