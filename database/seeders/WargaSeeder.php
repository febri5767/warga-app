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
                'jenis_kelamin' => 'Laki-laki',
                'status' => 'Kawin',
                'pekerjaan' => 'Sopir',
                'gol_dar' => 'A',
            ],
            [
                'id' => '2',
                'nama' => 'Ara',
                'tempat_lahir' => 'Jambi',
                'tgl_lahir' => '2006-06-15',
                'jenis_kelamin' => 'Perempuan',
                'status' => 'Kawin',
                'pekerjaan' => 'Karyawan',
                'gol_dar' => 'B',
            ]
            // Add more produks as needed
        ];

        // Insert data into the produk table
        DB::table('warga')->insert($warga);
    }
}
