<?php

use App\Position;
use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'Intern',
        ]);

        Position::create([
            'name' => 'Cashier'
        ]);

        Position::create([
            'name' => 'Manager',
        ]);
    }
}
