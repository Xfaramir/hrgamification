<?php

use Illuminate\Database\Seeder;

class IncomeCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Retail',],
            ['id' => 2, 'name' => 'Online (Web)',],

        ];

        foreach ($items as $item) {
            \App\IncomeCategory::create($item);
        }
    }
}
