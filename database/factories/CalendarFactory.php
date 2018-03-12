<?php

$factory->define(App\Calendar::class, function (Faker\Generator $faker) {
    return [
        "calendar_event" => $faker->name,
        "calendar_time" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "calendar_location" => $faker->name,
        "calendar_description" => $faker->name,
    ];
});
