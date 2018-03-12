<?php

$factory->define(App\Asset::class, function (Faker\Generator $faker) {
    return [
        "category_id" => factory('App\AssetsCategory')->create(),
        "serial_number" => $faker->name,
        "title" => $faker->name,
        "status_id" => factory('App\AssetsStatus')->create(),
        "location_id" => factory('App\AssetsLocation')->create(),
        "notes" => $faker->name,
        "assigned_to_id" => factory('App\Employee')->create(),
        "warranty" => $faker->date("Y-m-d", $max = 'now'),
        "depreciacion" => $faker->name,
        "barcode" => $faker->name,
    ];
});
