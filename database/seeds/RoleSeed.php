<?php

use Illuminate\Database\Seeder;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Administrator (can create other users)', 'roletype' => 'Administrator',],
            ['id' => 4, 'title' => 'Manager (can manage employees)', 'roletype' => 'Manager',],
            ['id' => 5, 'title' => 'Guest (Unauthenticated User)', 'roletype' => 'Guest',],
            ['id' => 6, 'title' => 'Employee (Simple User)', 'roletype' => 'Employee',],

        ];

        foreach ($items as $item) {
            \App\Role::create($item);
        }
    }
}
