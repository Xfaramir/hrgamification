<?php

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        "engagement_courses" => $faker->name,
        "engament_skill_id" => factory('App\Skill')->create(),
        "engagement_duration" => $faker->date("Y-m-d", $max = 'now'),
        "engagement_description" => $faker->name,
        "engagment_link" => $faker->name,
    ];
});
