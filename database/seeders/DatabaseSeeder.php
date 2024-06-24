<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $siswas = [
            [
                'nama' => 'sugianto',
                'nis' => '20023',
                'jurusan' => 'RPL',
                'kelas' => 'XI RPL 1',
                'gender' => 'laki-laki',
                'status' => 'true'
            ],
            [
                'nama' => 'bagas',
                'nis' => '20023',
                'kelas' => 'XI DPIB 1',
                'jurusan' => 'DPIB',
                'gender' => 'laki laki',
                'status' => 'true'
            ],
            [
                'nama' => 'supri',
                'nis' => '20001',
                'jurusan' => 'RPL',
                'kelas' => 'XII RPL 1',
                'gender' => 'perempuan',
                'status' => 'false'
            ]
        ];

        foreach ($siswas as $siswa) {
            Siswa::create($siswa);
        }
    }
}
