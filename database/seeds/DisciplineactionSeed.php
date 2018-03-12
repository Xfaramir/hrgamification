<?php

use Illuminate\Database\Seeder;

class DisciplineactionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'disciplineactions' => 'Probation', 'discipline_severity' => 'HIGH', 'discipline_description' => '<p>Disciplinary Document - Probation Description</p>
', 'discipline_status_id' => null,],
            ['id' => 2, 'disciplineactions' => 'Terminate', 'discipline_severity' => 'HIGH', 'discipline_description' => '<p>Disciplinary Document - Terminate</p>
', 'discipline_status_id' => null,],
            ['id' => 3, 'disciplineactions' => 'Verbal Warning', 'discipline_severity' => 'Low', 'discipline_description' => '<p>Disciplinary Document - Verbal Warning</p>
', 'discipline_status_id' => null,],
            ['id' => 4, 'disciplineactions' => 'Disciplinary Letter', 'discipline_severity' => 'Medium', 'discipline_description' => '<table id="resultTable">
	<tbody>
		<tr>
			<td>Disciplinary Document</td>
		</tr>
	</tbody>
</table>
', 'discipline_status_id' => null,],

        ];

        foreach ($items as $item) {
            \App\Disciplineaction::create($item);
        }
    }
}
