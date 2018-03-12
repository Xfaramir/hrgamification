<?php

$factory->define(App\Job::class, function (Faker\Generator $faker) {
    return [
        "job_title" => $faker->name,
        "job_description" => $faker->name,
        "job_note" => $faker->name,
    ];
});
