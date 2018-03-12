<?php

use Illuminate\Database\Seeder;

class AssetsHistorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'asset_id' => 1, 'status_id' => 1, 'location_id' => 2, 'assigned_user_id' => null,],
            ['id' => 2, 'asset_id' => 2, 'status_id' => 2, 'location_id' => 1, 'assigned_user_id' => null,],

        ];

        foreach ($items as $item) {
            \App\AssetsHistory::create($item);
        }
    }
}
