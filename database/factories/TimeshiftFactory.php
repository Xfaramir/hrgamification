<?php

$factory->define(App\Timeshift::class, function (Faker\Generator $faker) {
    return [
        "time_shift" => $faker->name,
        "time_from" => $faker->date("H:i:s", $max = 'now'),
        "time_to" => $faker->date("H:i:s", $max = 'now'),
        "time_hours" => $faker->date("H:i:s", $max = 'now'),
    ];
});
