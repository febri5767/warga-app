<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Pak RT',
                'email' => 'RT@example.com',
                'nomer_hp' => '085858585',
                'username' => 'Jono',
                'level' => 'user',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Febri',
                'email' => 'febri@gmail.com',
                'nomer_hp' => '0854545454',
                'username' => 'febri',
                'level' => 'admin',
                'password' => bcrypt('qwe'),
            ],
        ];

        // Insert data into the users table
        DB::table('users')->insert($users);
    }
}
