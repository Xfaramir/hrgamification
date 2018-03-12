<?php

$factory->define(App\Selfprofessional::class, function (Faker\Generator $faker) {
    return [
        "self_start" => $faker->date("Y-m-d", $max = 'now'),
        "self_end" => $faker->date("Y-m-d", $max = 'now'),
        "self_protitle" => $faker->name,
        "self_title_id" => factory('App\Job')->create(),
        "self_comment" => $faker->name,
    ];
});
