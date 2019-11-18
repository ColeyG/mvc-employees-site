<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{

    private $numOfEntries = 20;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      for ($i = 0; $i < $this->numOfEntries; $i++) {
        $gender = (rand(0, 1)===1) ? 'men' : 'women';

        \App\Employee::firstOrCreate([
          'name' => (($gender === 'men') ? $faker->firstNameMale : $faker->firstNameFemale)." ".$faker->lastName,
          'role' => $faker->jobTitle,
          'code' => rand(0, 999999999),
          'imageNumber' => rand(0, 99),
          'gender' => $gender
        ]);
      }
    }
}
