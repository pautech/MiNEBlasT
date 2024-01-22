<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'firstname' => 'Paulo',
            'lastname' => 'Duga',
            'username' => strtolower('Paulo').'.'.strtolower('Duga'),
            'email' => strtolower('Paulo').'.'.strtolower('Duga'). '@example.com',
            'password' => bcrypt('password'),
        ]);
        $user = User::create([
            'firstname' => 'Almar',
            'lastname' => 'Arnado',
            'username' => strtolower('Almar').'.'.strtolower('Arnado'),
            'email' => strtolower('Almar').'.'.strtolower('Arnado'). '@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
