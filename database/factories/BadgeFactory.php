<?php

$factory->define(App\Badge::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
        "description" => $faker->name,
        "status_id" => factory('App\Status')->create(),
    ];
});
