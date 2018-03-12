<?php

$factory->define(App\Costcenter::class, function (Faker\Generator $faker) {
    return [
        "cost_id" => $faker->name,
        "cost_name" => $faker->name,
        "cost_description" => $faker->name,
    ];
});
