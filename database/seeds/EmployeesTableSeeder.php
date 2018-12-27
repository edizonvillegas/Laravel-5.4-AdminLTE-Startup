<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 100;

        for ($i = 0; $i < $limit; $i++) {
        	
        	$gender = $faker->randomElement(['male', 'female']);

            DB::table('employees')->insert([ //,
                'userRandomId' => str_random(60),
                'firstname' => $faker->firstname($gender),
                'lastname' => $faker->lastname,
                'gender' => $gender,
                'email' => $faker->unique()->email,
                'birthday' => $faker->date($format = 'Y-m-d'),
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'status' => $faker->boolean($chanceOfGettingTrue = 90)
            ]);
        }
    }
}
