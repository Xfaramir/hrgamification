<?php

$factory->define(App\Disciplinarycase::class, function (Faker\Generator $faker) {
    return [
        "discipline_employee_id" => factory('App\Employee')->create(),
        "discipline_case" => $faker->name,
        "disciplinary_description" => $faker->name,
        "disciplinary_date" => $faker->date("Y-m-d", $max = 'now'),
        "disciplinary_actions_id" => factory('App\Disciplineaction')->create(),
        "disciplinary_manager_id" => factory('App\User')->create(),
    ];
});
