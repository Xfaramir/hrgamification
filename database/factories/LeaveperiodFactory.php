<?php

$factory->define(App\Leaveperiod::class, function (Faker\Generator $faker) {
    return [
        "leave_type" => $faker->name,
        "leave_from" => $faker->date("Y-m-d H:i:s", $max = 'now'),
        "leave_until" => $faker->date("Y-m-d H:i:s", $max = 'now'),
    ];
});
