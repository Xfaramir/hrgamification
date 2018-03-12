<?php

use Illuminate\Database\Seeder;

class AssetsLocationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'First Floor (Reception)',],
            ['id' => 2, 'title' => 'Second Floor (Engineer/Technical)',],
            ['id' => 3, 'title' => 'Third Floor (Management)',],

        ];

        foreach ($items as $item) {
            \App\AssetsLocation::create($item);
        }
    }
}
