<?php

use Illuminate\Database\Seeder;

class EducationSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'education_level' => 'Professional', 'education_title' => 'College Degree /  University',],

        ];

        foreach ($items as $item) {
            \App\Education::create($item);
        }
    }
}
