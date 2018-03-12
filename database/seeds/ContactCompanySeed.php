<?php

use Illuminate\Database\Seeder;

class ContactCompanySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Amadeus', 'address' => 'Carrera 11 No. 84-09 piso 6 Torre Amadeus', 'website' => 'https://intranet.amadeus.com', 'email' => 'servicedesk@amadeus.com',],
            ['id' => 2, 'name' => 'Universidad Incca', 'address' => 'Carrera 13 Nº 24 15; Bogotá,, Colombia', 'website' => 'https://www.unincca.edu.co/', 'email' => 'derechofusa@unincca.edu.co ',],

        ];

        foreach ($items as $item) {
            \App\ContactCompany::create($item);
        }
    }
}
