<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->call(RoleSeed::class);
        $this->call(UserSeed::class);
        $this->call(CurrencySeed::class);
        $this->call(StatusSeed::class);
        $this->call(DisciplineactionSeed::class);
        $this->call(NationalitySeed::class);
        $this->call(UserActionSeed::class);

    }
}
