<?php

use Illuminate\Database\Seeder;

class AssetSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

        ];

        foreach ($items as $item) {
            \App\Asset::create($item);
        }
    }
}
