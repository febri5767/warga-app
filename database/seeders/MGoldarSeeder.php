<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MGoldarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $goldar = [
            [
                'id' => '1',
                'goldar' => 'A'
            ],
            [
                'id' => '2',
                'goldar' => 'B'
            ],
            [
                'id' => '3',
                'goldar' => 'AB'
            ],
            [
                'id' => '4',
                'goldar' => 'O'
            ],
            [
                'id' => '5',
                'goldar' => 'Tidak Tahu'
            ],
        ];

        DB::table('m_goldar')->insert($goldar);
    }
}
