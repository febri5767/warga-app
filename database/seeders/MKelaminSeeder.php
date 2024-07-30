<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MKelaminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelamin = [
            [
                'id' => '1',
                'kelamin' => 'Laki-Laki'
            ],
            [
                'id' => '2',
                'kelamin' => 'Perempuan'
            ],
        ];

        DB::table('m_kelamin')->insert($kelamin);
    }
}
