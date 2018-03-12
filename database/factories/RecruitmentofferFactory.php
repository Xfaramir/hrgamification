<?php

$factory->define(App\Recruitmentoffer::class, function (Faker\Generator $faker) {
    return [
        "hiring_offer_id" => factory('App\Vacancy')->create(),
    ];
});
