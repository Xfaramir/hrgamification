<?php

use Illuminate\Database\Seeder;

class AssetsCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Equipment',],
            ['id' => 2, 'title' => 'Location And Facilities',],
            ['id' => 3, 'title' => 'Vehicles',],
            ['id' => 4, 'title' => 'Forniture',],
            ['id' => 5, 'title' => 'Computing',],

        ];

        foreach ($items as $item) {
            \App\AssetsCategory::create($item);
        }
    }
}
