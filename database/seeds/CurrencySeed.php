<?php

use Illuminate\Database\Seeder;

class CurrencySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'currency' => 'Pesos COL',],

        ];

        foreach ($items as $item) {
            \App\Currency::create($item);
        }
    }
}
