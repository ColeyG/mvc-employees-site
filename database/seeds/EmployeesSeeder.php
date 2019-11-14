<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    private $employeeEntries = [
      ['name' => 'Carl Evans', 'role' => 'VP of Sales', 'code' => '812938424', 'imageNumber' => '99', 'gender' => 'men'],
      ['name' => 'Christine Archduke', 'role' => 'VP of Public Relations', 'code' => '568196847', 'imageNumber' => '99', 'gender' => 'women'],
      ['name' => 'Rhi Bagdoor', 'role' => 'Public Relations Manager', 'code' => '555325648529', 'imageNumber' => '24', 'gender' => 'women']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      foreach ($this->employeeEntries as $employee) {
        \App\Employee::firstOrCreate([
          'name' => $employee['name'],
          'role' => $employee['role'],
          'code' => $employee['code'],
          'imageNumber' => $employee['imageNumber'],
          'gender' => $employee['gender']
        ]);
      }
    }
}
