<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $warga = [
            [
                'id' => '1',
                'nama' => 'Febri',
                'tempat_lahir' => 'Batang',
                'tgl_lahir' => '1994-06-15',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Sopir',
                'goldar_id' => '1',
            ],
            [
                'id' => '2',
                'nama' => 'Ara',
                'tempat_lahir' => 'Jambi',
                'tgl_lahir' => '2006-06-15',
                'kelamin_id' => '2',
                'status_id' => '1',
                'pekerjaan' => 'Karyawan',
                'goldar_id' => '2',
            ],
            [
                'id' => '3',
                'nama' => 'Rara',
                'tempat_lahir' => 'Semarang',
                'tgl_lahir' => '2000-06-15',
                'kelamin_id' => '2',
                'status_id' => '1',
                'pekerjaan' => 'Karyawan',
                'goldar_id' => '4',
            ]
        ];

        DB::table('warga')->insert($warga);
    }
}
