<?php

use Illuminate\Database\Seeder;

class StatusSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'status' => 'In progress',],

        ];

        foreach ($items as $item) {
            \App\Status::create($item);
        }
    }
}
