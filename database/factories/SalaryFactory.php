<?php

$factory->define(App\Salary::class, function (Faker\Generator $faker) {
    return [
        "salary" => $faker->name,
        "salary_position_id" => factory('App\Job')->create(),
    ];
});
