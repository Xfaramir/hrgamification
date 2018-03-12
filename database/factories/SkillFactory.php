<?php

$factory->define(App\Skill::class, function (Faker\Generator $faker) {
    return [
        "skill_name" => $faker->name,
        "skill_description" => $faker->name,
    ];
});
