<?php

$factory->define(App\Disciplineaction::class, function (Faker\Generator $faker) {
    return [
        "disciplineactions" => $faker->name,
        "discipline_severity" => $faker->name,
        "discipline_description" => $faker->name,
        "discipline_status_id" => factory('App\Status')->create(),
    ];
});
