<?php

$factory->define(App\Vacancy::class, function (Faker\Generator $faker) {
    return [
        "vacancy_title_id" => factory('App\Job')->create(),
        "vacancy_name" => $faker->name,
        "vacancy_manager_id" => factory('App\Employee')->create(),
        "vacancy_description" => $faker->name,
        "vacancy_date" => $faker->date("Y-m-d", $max = 'now'),
        "vacancy_location_id" => factory('App\Nationality')->create(),
        "vacancy_available" => $faker->randomNumber(2),
    ];
});
