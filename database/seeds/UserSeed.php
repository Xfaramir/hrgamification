<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$5rboHiHeTkr/PJGfPIYL0udhPVtcNxv4rB2zNSa77XAx7PvvS6Eu6', 'role_id' => 1, 'remember_token' => '', 'username' => 'admin',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
