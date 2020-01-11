<?php

use Illuminate\Database\Seeder;
use Grunenthal\Models\State;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $states = array(
            [
                'state' => 'Activo'
            ],
            [
                'state' => 'Inactivo'
            ],
            [
                'state' => 'Pendiente'
            ]
        );

        foreach ($states as $value) {
            $state = new State;
            $state->state = $value['state'];
            $state->save();
        }

    }
}
