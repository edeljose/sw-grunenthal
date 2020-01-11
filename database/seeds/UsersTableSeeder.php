<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Grunenthal\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $faker = Faker::create();
            for ($i = 0; $i < 20; $i++) {
                $user = new User;
                $user->names = $faker->name;
                $user->surnames = $faker->name;
                $user->age = $faker->numberBetween($min = 19, $max = 65);
                $user->image = $faker->name;
                $user->email = $faker->email;
                $user->password = Hash::make('test123');
                $user->rol_id = $faker->numberBetween($min = 1, $max = 2);
                $user->state_id = $faker->numberBetween($min = 1, $max = 3);
                $user->save();
            }
    }
}
