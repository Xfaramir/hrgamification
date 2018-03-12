<?php

$factory->define(App\Currency::class, function (Faker\Generator $faker) {
    return [
        "currency" => $faker->name,
    ];
});
