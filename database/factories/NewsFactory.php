<?php

$factory->define(App\News::class, function (Faker\Generator $faker) {
    return [
        "subject" => $faker->name,
        "published_date" => $faker->date("Y-m-d", $max = 'now'),
        "description" => $faker->name,
    ];
});
