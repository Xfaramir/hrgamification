<?php

use Illuminate\Database\Seeder;

class ContactSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'company_id' => 2, 'first_name' => 'Flavio', 'last_name' => 'Soto', 'phone1' => 'XXXXXXXXXX', 'phone2' => 'XXXXXXXXXX', 'email' => 'flavio.soto@yopmail.com', 'skype' => 'N/A', 'address' => null,],
            ['id' => 2, 'company_id' => 1, 'first_name' => 'Eva', 'last_name' => 'Acosta', 'phone1' => '3115864433', 'phone2' => '31177111', 'email' => 'evikeszurke@gmail.com', 'skype' => 'evikeszurke', 'address' => 'Calle 30 # 40 b # 40',],

        ];

        foreach ($items as $item) {
            \App\Contact::create($item);
        }
    }
}
