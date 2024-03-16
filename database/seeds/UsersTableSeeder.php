<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Poblar la base de datos con usuarios
        User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Administrative',
        ]);

        User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Teacher',
        ]);

        User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => bcrypt('Adm@2022'),
            'role' => 'Student',
        ]);
    }
}
