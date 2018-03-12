<?php

use Illuminate\Database\Seeder;

class ExpenseCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Travel',],
            ['id' => 2, 'name' => 'Transportation',],
            ['id' => 3, 'name' => 'Hotel Room Expenses',],
            ['id' => 4, 'name' => 'Internet',],
            ['id' => 5, 'name' => 'Utilities',],
            ['id' => 6, 'name' => 'Employees',],

        ];

        foreach ($items as $item) {
            \App\ExpenseCategory::create($item);
        }
    }
}
