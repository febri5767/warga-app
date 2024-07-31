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
            ],
            [
                'id' => '4',
                'nama' => 'Budi',
                'tempat_lahir' => 'Jakarta',
                'tgl_lahir' => '1985-03-12',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Guru',
                'goldar_id' => '3',
            ],
            [
                'id' => '5',
                'nama' => 'Siti',
                'tempat_lahir' => 'Bandung',
                'tgl_lahir' => '1992-08-25',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Dokter',
                'goldar_id' => '1',
            ],
            [
                'id' => '6',
                'nama' => 'Tono',
                'tempat_lahir' => 'Surabaya',
                'tgl_lahir' => '1975-12-30',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Petani',
                'goldar_id' => '2',
            ],
            [
                'id' => '7',
                'nama' => 'Ani',
                'tempat_lahir' => 'Yogyakarta',
                'tgl_lahir' => '1988-11-05',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Perawat',
                'goldar_id' => '4',
            ],
            [
                'id' => '8',
                'nama' => 'Dewi',
                'tempat_lahir' => 'Solo',
                'tgl_lahir' => '1995-07-19',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Pengacara',
                'goldar_id' => '3',
            ],
            [
                'id' => '9',
                'nama' => 'Hadi',
                'tempat_lahir' => 'Malang',
                'tgl_lahir' => '1980-01-15',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Pengusaha',
                'goldar_id' => '2',
            ],
            [
                'id' => '10',
                'nama' => 'Rini',
                'tempat_lahir' => 'Medan',
                'tgl_lahir' => '1997-06-10',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Akuntan',
                'goldar_id' => '1',
            ],
            [
                'id' => '11',
                'nama' => 'Yudi',
                'tempat_lahir' => 'Palembang',
                'tgl_lahir' => '1991-04-27',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Insinyur',
                'goldar_id' => '3',
            ],
            [
                'id' => '12',
                'nama' => 'Lina',
                'tempat_lahir' => 'Denpasar',
                'tgl_lahir' => '1983-09-30',
                'kelamin_id' => '2',
                'status_id' => '3',
                'pekerjaan' => 'Arsitek',
                'goldar_id' => '4',
            ],
            [
                'id' => '13',
                'nama' => 'Rudi',
                'tempat_lahir' => 'Makassar',
                'tgl_lahir' => '1996-05-15',
                'kelamin_id' => '1',
                'status_id' => '1',
                'pekerjaan' => 'Mahasiswa',
                'goldar_id' => '1',
            ],
            [
                'id' => '14',
                'nama' => 'Maya',
                'tempat_lahir' => 'Padang',
                'tgl_lahir' => '2000-03-20',
                'kelamin_id' => '2',
                'status_id' => '1',
                'pekerjaan' => 'Pelajar',
                'goldar_id' => '2',
            ],
            [
                'id' => '15',
                'nama' => 'Agus',
                'tempat_lahir' => 'Bogor',
                'tgl_lahir' => '1989-10-10',
                'kelamin_id' => '1',
                'status_id' => '4',
                'pekerjaan' => 'Tentara',
                'goldar_id' => '3',
            ],
            [
                'id' => '16',
                'nama' => 'Nina',
                'tempat_lahir' => 'Pekanbaru',
                'tgl_lahir' => '1993-12-25',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Polisi',
                'goldar_id' => '4',
            ],
            [
                'id' => '17',
                'nama' => 'Bayu',
                'tempat_lahir' => 'Banjarmasin',
                'tgl_lahir' => '1986-06-18',
                'kelamin_id' => '1',
                'status_id' => '2',
                'pekerjaan' => 'Pilot',
                'goldar_id' => '2',
            ],
            [
                'id' => '18',
                'nama' => 'Ria',
                'tempat_lahir' => 'Pontianak',
                'tgl_lahir' => '1998-02-28',
                'kelamin_id' => '2',
                'status_id' => '2',
                'pekerjaan' => 'Pramugari',
                'goldar_id' => '5',
            ],
            [
                'id' => '19',
                'nama' => 'Asep',
                'tempat_lahir' => 'Cirebon',
                'tgl_lahir' => '1982-07-21',
                'kelamin_id' => '1',
                'status_id' => '3',
                'pekerjaan' => 'Nelayan',
                'goldar_id' => '3',
            ],
            [
                'id' => '20',
                'nama' => 'Lala',
                'tempat_lahir' => 'Tangerang',
                'tgl_lahir' => '1999-04-14',
                'kelamin_id' => '2',
                'status_id' => '1',
                'pekerjaan' => 'Mahasiswa',
                'goldar_id' => '5',
            ]
        ];
        

        DB::table('warga')->insert($warga);
    }
}
