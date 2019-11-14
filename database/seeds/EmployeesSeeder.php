<?php

use Illuminate\Database\Seeder;

class EmployeesSeeder extends Seeder
{
    private $employeeEntries = [
      ['name' => 'Alex Evans', 'role' => 'VP of Sales'],
      ['name' => 'Chris Archduke', 'role' => 'VP of Public Relations'],
      ['name' => 'Rhi Bagdoor', 'role' => 'Public Relations Manager']
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
          'code' => rand(0, 999999999),
          'imageNumber' => rand(0, 99),
          'gender' => (rand(0, 1)===1) ? 'men' : 'women'
        ]);
      }
    }
}
