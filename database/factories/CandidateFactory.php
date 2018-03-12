<?php

$factory->define(App\Candidate::class, function (Faker\Generator $faker) {
    return [
        "candidate_vacancy_id" => factory('App\Vacancy')->create(),
        "candidate_name" => $faker->name,
        "candidate_firstname" => $faker->name,
        "candidate_secondname" => $faker->name,
        "candidate_email" => $faker->safeEmail,
        "candidate_phone" => $faker->randomNumber(2),
        "candidate_facebook" => $faker->name,
        "candidate_linkein" => $faker->name,
        "candidate_notes" => $faker->name,
        "candidate_date" => $faker->date("Y-m-d", $max = 'now'),
    ];
});
