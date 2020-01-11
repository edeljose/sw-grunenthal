<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
            [
                'role' => 'Administrador'
            ],
            [
                'role' => 'Usuario'
            ]
        );

        foreach ($roles as $value) {
            $role = new Role;
            $role->name = $value['role'];
            $role->save();
        }
    }
}

