<?php

use Illuminate\Database\Seeder;

class LeaveentitlementSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 2, 'leave_type_id' => 1, 'leave_employee_id' => 3, 'leave_from' => '2017-10-17', 'leave_until' => '2017-10-20', 'status_id' => null,],

        ];

        foreach ($items as $item) {
            \App\Leaveentitlement::create($item);
        }
    }
}
