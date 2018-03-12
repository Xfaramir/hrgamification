<?php

$factory->define(App\Leaveentitlement::class, function (Faker\Generator $faker) {
    return [
        "leave_type_id" => factory('App\Leaveperiod')->create(),
        "leave_employee_id" => factory('App\Employee')->create(),
        "leave_from" => $faker->date("Y-m-d", $max = 'now'),
        "leave_until" => $faker->date("Y-m-d", $max = 'now'),
        "status_id" => factory('App\Status')->create(),
    ];
});
