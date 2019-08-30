<?php

use App\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'name' => 'Human Resource Department',
        ]);

        Department::create([
            'name' => 'Sales Department',
        ]);

        Department::create([
            'name' => 'Tenant Management Department',
        ]);

        Department::create([
            'name' => 'Warehouse Department',
        ]);

        Department::create([
            'name' => 'Delivery Department',
        ]);

        Department::create([
            'name' => 'Purchasing Department'
        ]);
    }
}
