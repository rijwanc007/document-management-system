<?php

use Faker\Generator as Faker;
$factory->define(App\ContactManagement::class, function (Faker $faker) {
    return [
        'contact_pic'=>'1546434480.jpg',
        'first_name'=>$faker->firstName,
        'last_name'=>$faker->lastName,
        'company'=>$faker->company,
        'job_title'=>$faker->jobTitle,
        'email_address'=>$faker->email,
        'website'=>'https://ftit.co.uk/',
        'mobile'=>'01986347226',
        'home_phone'=>'01886347226',
        'link_profile'=>'https://linkdin.com/'.$faker->firstName,
        'facebook'=>'https://facebook.com/'.$faker->lastName,
        'skype'=>$faker->firstName.'_'.$faker->lastName,
        'address_one'=>$faker->address,
        'address_two'=>$faker->city.','.$faker->country,
        'description'=>$faker->paragraph,
    ];
});
