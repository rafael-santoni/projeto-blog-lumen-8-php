<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i=0; $i < 20; $i++) { 
            DB::table('users')->insert([
                'firstName' => $faker->name(),
                'lastName' => $faker->lastName(),
                "email" => $faker->email(),
                'password' => Hash::make('123')
            ]);
        }
    }
}
