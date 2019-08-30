<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesTableSeeder::class);
        $this->call(PositionsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        factory(App\User::class, 10)->create();
    }
}
