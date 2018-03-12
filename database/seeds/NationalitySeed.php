<?php

use Illuminate\Database\Seeder;

class NationalitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nationalities' => 'Colombia', 'city' => 'Bogota',],

        ];

        foreach ($items as $item) {
            \App\Nationality::create($item);
        }
    }
}
