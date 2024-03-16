<?php

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Poblar la base de datos con kits de robótica
        RoboticsKit::create([
            'name' => 'StarterKit',
        ]);

        RoboticsKit::create([
            'name' => 'Educational Robotics Kit',
        ]);

        RoboticsKit::create([
            'name' => 'Kit5',
        ]);
    }
}
