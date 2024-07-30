<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            [
                'id' => '1',
                'status' => 'Belum Kawin'
            ],
            [
                'id' => '2',
                'status' => 'Kawin'
            ],
            [
                'id' => '3',
                'status' => 'Cerai Hidup'
            ],
            [
                'id' => '4',
                'status' => 'Cerai Mati'
            ],
        ];

        DB::table('m_status')->insert($status);
    }
}
