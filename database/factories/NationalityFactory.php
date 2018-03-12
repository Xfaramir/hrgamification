<?php

$factory->define(App\Nationality::class, function (Faker\Generator $faker) {
    return [
        "nationalities" => $faker->name,
        "city" => $faker->name,
    ];
});
