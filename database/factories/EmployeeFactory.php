<?php

$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        "employee_name" => $faker->name,
        "employee_middlename" => $faker->name,
        "employee_lastname" => $faker->name,
        "employee_salary_id" => factory('App\Salary')->create(),
        "employee_username_id" => factory('App\User')->create(),
        "employee_id" => $faker->name,
        "employee_title_id" => factory('App\Job')->create(),
        "employee_timeshift_id" => factory('App\Timeshift')->create(),
        "employee_costcenter_id" => factory('App\Costcenter')->create(),
        "employee_skills_id" => factory('App\Skill')->create(),
        "employee_education_id" => factory('App\Education')->create(),
        "employee_nationality_id" => factory('App\Nationality')->create(),
        "employee_phone" => $faker->name,
        "employee_address" => $faker->name,
        "employee_bankaccount" => $faker->name,
        "employee_email" => $faker->safeEmail,
    ];
});
