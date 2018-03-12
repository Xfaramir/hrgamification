<?php

$factory->define(App\Education::class, function (Faker\Generator $faker) {
    return [
        "education_level" => $faker->name,
        "education_title" => $faker->name,
    ];
});
