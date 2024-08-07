<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\TestStatus\Warning;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(UserSeeder::class);
        $this->call(MKelaminSeeder::class);
        $this->call(MStatusSeeder::class);
        $this->call(MGoldarSeeder::class);
        $this->call(WargaSeeder::class);
    }
}
