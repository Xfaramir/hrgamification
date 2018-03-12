<?php

use Illuminate\Database\Seeder;

class LeaveperiodSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'leave_type' => 'Holiday Week', 'leave_from' => '2017-10-01 00:00:00', 'leave_until' => '2017-10-23 00:00:00',],

        ];

        foreach ($items as $item) {
            \App\Leaveperiod::create($item);
        }
    }
}
